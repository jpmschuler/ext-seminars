<?php

use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 * @author Niels Pardon <mail@niels-pardon.de>
 */
class Tx_Seminars_Tests_Unit_Csv_DownloadRegistrationListViewTest extends \Tx_Phpunit_TestCase
{
    /**
     * @var \Tx_Seminars_Csv_DownloadRegistrationListView
     */
    protected $subject = null;

    /**
     * @var \Tx_Oelib_TestingFramework
     */
    protected $testingFramework = null;

    /**
     * @var \Tx_Oelib_Configuration
     */
    protected $configuration = null;

    /**
     * PID of the system folder in which we store our test data
     *
     * @var int
     */
    protected $pageUid = 0;

    /**
     * UID of a test event record
     *
     * @var int
     */
    protected $eventUid = 0;

    protected function setUp()
    {
        $GLOBALS['SIM_EXEC_TIME'] = 1524751343;

        $GLOBALS['LANG']->includeLLFile('EXT:seminars/Resources/Private/Language/locallang_db.xlf');
        if (VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 8007000) {
            $GLOBALS['LANG']->includeLLFile('EXT:lang/Resources/Private/Language/locallang_general.xlf');
        } else {
            $GLOBALS['LANG']->includeLLFile('EXT:lang/locallang_general.xlf');
        }

        $this->testingFramework = new \Tx_Oelib_TestingFramework('tx_seminars');

        $configurationRegistry = \Tx_Oelib_ConfigurationRegistry::getInstance();
        $configurationRegistry->set('plugin', new \Tx_Oelib_Configuration());
        $this->configuration = new \Tx_Oelib_Configuration();
        $this->configuration->setData(['charsetForCsv' => 'utf-8']);
        $configurationRegistry->set('plugin.tx_seminars', $this->configuration);

        $this->pageUid = $this->testingFramework->createSystemFolder();
        $this->eventUid = $this->testingFramework->createRecord(
            'tx_seminars_seminars',
            [
                'pid' => $this->pageUid,
                'begin_date' => $GLOBALS['SIM_EXEC_TIME'],
            ]
        );

        $this->subject = new \Tx_Seminars_Csv_DownloadRegistrationListView();
        $this->subject->setEventUid($this->eventUid);
    }

    protected function tearDown()
    {
        $this->testingFramework->cleanUp();
    }

    /**
     * Retrieves the localization for the given locallang key and then strips the trailing colon from the localization.
     *
     * @param string $locallangKey
     *        the locallang key with the localization to remove the trailing colon from, must not be empty and the localization
     *        must have a trailing colon
     *
     * @return string locallang string with the removed trailing colon, will not be empty
     */
    protected function localizeAndRemoveColon($locallangKey)
    {
        return rtrim($GLOBALS['LANG']->getLL($locallangKey), ':');
    }

    /**
     * @test
     */
    public function renderCanContainOneRegistrationUid()
    {
        $this->configuration->setAsString('fieldsFromFeUserForCsv', '');
        $this->configuration->setAsString('fieldsFromAttendanceForCsv', 'uid');

        $registrationUid = $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(),
            ]
        );

        self::assertContains(
            (string)$registrationUid,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderContainsFrontEndUserFieldsForDownload()
    {
        $firstName = 'John';
        $lastName = 'Doe';

        $this->configuration->setAsString('fieldsFromFeUserForCsv', 'first_name');
        $this->configuration->setAsString('fieldsFromFeUserForEmailCsv', 'last_name');

        $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(
                    '',
                    ['first_name' => $firstName, 'last_name' => $lastName]
                ),
            ]
        );

        self::assertContains(
            $firstName,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderNotContainsFrontEndUserFieldsForEmail()
    {
        $firstName = 'John';
        $lastName = 'Doe';

        $this->configuration->setAsString('fieldsFromFeUserForCsv', 'first_name');
        $this->configuration->setAsString('fieldsFromFeUserForEmailCsv', 'last_name');

        $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(
                    '',
                    ['first_name' => $firstName, 'last_name' => $lastName]
                ),
            ]
        );

        self::assertNotContains(
            $lastName,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderContainsRegistrationFieldsForDownload()
    {
        $knownFrom = 'Google';
        $notes = 'Looking forward to the event!';

        $this->configuration->setAsString('fieldsFromAttendanceForCsv', 'known_from');
        $this->configuration->setAsString('fieldsFromAttendanceForEmailCsv', 'notes');

        $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(),
                'known_from' => $knownFrom,
                'notes' => $notes,
            ]
        );

        self::assertContains(
            $knownFrom,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderNotContainsRegistrationFieldsForEmail()
    {
        $knownFrom = 'Google';
        $notes = 'Looking forward to the event!';

        $this->configuration->setAsString('fieldsFromAttendanceForCsv', 'known_from');
        $this->configuration->setAsString('fieldsFromAttendanceForEmailCsv', 'notes');

        $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(),
                'known_from' => $knownFrom,
                'notes' => $notes,
            ]
        );

        self::assertNotContains(
            $notes,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderForQueueRegistrationsNotAllowedForDownloadNotContainsRegistrationOnQueue()
    {
        $this->configuration->setAsBoolean('showAttendancesOnRegistrationQueueInCSV', false);
        $this->configuration->setAsBoolean('showAttendancesOnRegistrationQueueInEmailCsv', true);

        $this->configuration->setAsString('fieldsFromAttendanceForCsv', 'uid');
        $this->configuration->setAsString('fieldsFromAttendanceForEmailCsv', 'uid');

        $registrationUid = $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(),
                'registration_queue' => true,
            ]
        );

        self::assertNotContains(
            (string)$registrationUid,
            $this->subject->render()
        );
    }

    /**
     * @test
     */
    public function renderForQueueRegistrationsAllowedForDownloadNotContainsRegistrationOnQueue()
    {
        $this->configuration->setAsBoolean('showAttendancesOnRegistrationQueueInCSV', true);
        $this->configuration->setAsBoolean('showAttendancesOnRegistrationQueueInEmailCsv', false);

        $this->configuration->setAsString('fieldsFromAttendanceForCsv', 'uid');
        $this->configuration->setAsString('fieldsFromAttendanceForEmailCsv', 'uid');

        $registrationUid = $this->testingFramework->createRecord(
            'tx_seminars_attendances',
            [
                'seminar' => $this->eventUid,
                'crdate' => $GLOBALS['SIM_EXEC_TIME'],
                'user' => $this->testingFramework->createFrontEndUser(),
                'registration_queue' => true,
            ]
        );

        self::assertContains(
            (string)$registrationUid,
            $this->subject->render()
        );
    }
}
