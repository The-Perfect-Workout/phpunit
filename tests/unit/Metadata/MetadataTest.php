<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\TestCase;
use PHPUnit\Metadata\Version\ComparisonRequirement;
use PHPUnit\Util\VersionComparisonOperator;

#[CoversClass(After::class)]
#[CoversClass(AfterClass::class)]
#[CoversClass(BackupGlobals::class)]
#[CoversClass(BackupStaticProperties::class)]
#[CoversClass(Before::class)]
#[CoversClass(BeforeClass::class)]
#[CoversClass(CodeCoverageIgnore::class)]
#[CoversClass(Covers::class)]
#[CoversClass(\PHPUnit\Metadata\CoversClass::class)]
#[CoversClass(CoversDefaultClass::class)]
#[CoversClass(CoversFunction::class)]
#[CoversClass(CoversNothing::class)]
#[CoversClass(DataProvider::class)]
#[CoversClass(DependsOnMethod::class)]
#[CoversClass(DoesNotPerformAssertions::class)]
#[CoversClass(ExcludeGlobalVariableFromBackup::class)]
#[CoversClass(ExcludeStaticPropertyFromBackup::class)]
#[CoversClass(Group::class)]
#[CoversClass(Metadata::class)]
#[CoversClass(PostCondition::class)]
#[CoversClass(PreCondition::class)]
#[CoversClass(PreserveGlobalState::class)]
#[CoversClass(RequiresFunction::class)]
#[CoversClass(RequiresMethod::class)]
#[CoversClass(RequiresOperatingSystem::class)]
#[CoversClass(RequiresOperatingSystemFamily::class)]
#[CoversClass(RequiresPhp::class)]
#[CoversClass(RequiresPhpExtension::class)]
#[CoversClass(RequiresPhpunit::class)]
#[CoversClass(RequiresSetting::class)]
#[CoversClass(RunInSeparateProcess::class)]
#[CoversClass(RunTestsInSeparateProcesses::class)]
#[CoversClass(Test::class)]
#[CoversClass(TestDox::class)]
#[CoversClass(TestWith::class)]
#[CoversClass(Uses::class)]
#[CoversClass(UsesClass::class)]
#[CoversClass(UsesDefaultClass::class)]
#[CoversClass(UsesFunction::class)]
#[Small]
final class MetadataTest extends TestCase
{
    public function testCanBeAfter(): void
    {
        $metadata = Metadata::after();

        $this->assertTrue($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeAfterClass(): void
    {
        $metadata = Metadata::afterClass();

        $this->assertFalse($metadata->isAfter());
        $this->assertTrue($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeBackupGlobals(): void
    {
        $metadata = Metadata::backupGlobalsOnClass(false);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertTrue($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertFalse($metadata->enabled());
    }

    public function testCanBeBackupStaticProperties(): void
    {
        $metadata = Metadata::backupStaticPropertiesOnClass(false);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertTrue($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertFalse($metadata->enabled());
    }

    public function testCanBeBeforeClass(): void
    {
        $metadata = Metadata::beforeClass();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertTrue($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeBefore(): void
    {
        $metadata = Metadata::before();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertTrue($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeCodeCoverageIgnore(): void
    {
        $metadata = Metadata::codeCoverageIgnoreOnClass();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertTrue($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeCovers(): void
    {
        $metadata = Metadata::coversOnClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertTrue($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->target());
    }

    public function testCanBeCoversClass(): void
    {
        $metadata = Metadata::coversClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertTrue($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
        $this->assertSame(self::class, $metadata->asStringForCodeUnitMapper());
    }

    public function testCanBeCoversDefaultClass(): void
    {
        $metadata = Metadata::coversDefaultClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertTrue($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
    }

    public function testCanBeCoversFunction(): void
    {
        $metadata = Metadata::coversFunction('f');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertTrue($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('f', $metadata->functionName());
        $this->assertSame('::f', $metadata->asStringForCodeUnitMapper());
    }

    public function testCanBeCoversNothing(): void
    {
        $metadata = Metadata::coversNothingOnClass();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertTrue($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeDataProvider(): void
    {
        $metadata = Metadata::dataProvider(self::class, 'method');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertTrue($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
        $this->assertSame('method', $metadata->methodName());
    }

    public function testCanBeDepends(): void
    {
        $metadata = Metadata::dependsOnMethod(self::class, 'method', false, false);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertTrue($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
        $this->assertSame('method', $metadata->methodName());
        $this->assertFalse($metadata->deepClone());
        $this->assertFalse($metadata->shallowClone());
    }

    public function testCanBeDoesNotPerformAssertions(): void
    {
        $metadata = Metadata::doesNotPerformAssertionsOnClass();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertTrue($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeExcludeGlobalVariableFromBackup(): void
    {
        $metadata = Metadata::excludeGlobalVariableFromBackupOnClass('variable');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertTrue($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('variable', $metadata->globalVariableName());
    }

    public function testCanBeExcludeStaticPropertyFromBackup(): void
    {
        $metadata = Metadata::excludeStaticPropertyFromBackupOnClass('class', 'property');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertTrue($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('class', $metadata->className());
        $this->assertSame('property', $metadata->propertyName());
    }

    public function testCanBeGroup(): void
    {
        $metadata = Metadata::groupOnClass('name');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertTrue($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('name', $metadata->groupName());
    }

    public function testCanBeRunTestsInSeparateProcesses(): void
    {
        $metadata = Metadata::runTestsInSeparateProcesses();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertTrue($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeRunClassInSeparateProcess(): void
    {
        $metadata = Metadata::runClassInSeparateProcess();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertTrue($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeRunInSeparateProcess(): void
    {
        $metadata = Metadata::runInSeparateProcess();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertTrue($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeTest(): void
    {
        $metadata = Metadata::test();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertTrue($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBePreCondition(): void
    {
        $metadata = Metadata::preCondition();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertTrue($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBePostCondition(): void
    {
        $metadata = Metadata::postCondition();

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertTrue($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBePreserveGlobalState(): void
    {
        $metadata = Metadata::preserveGlobalStateOnClass(false);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertTrue($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertFalse($metadata->enabled());
    }

    public function testCanBeRequiresMethod(): void
    {
        $metadata = Metadata::requiresMethodOnClass(self::class, __METHOD__);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertTrue($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
        $this->assertSame(__METHOD__, $metadata->methodName());
    }

    public function testCanBeRequiresFunction(): void
    {
        $metadata = Metadata::requiresFunctionOnClass('f');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertTrue($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('f', $metadata->functionName());
    }

    public function testCanBeRequiresOperatingSystem(): void
    {
        $metadata = Metadata::requiresOperatingSystemOnClass('Linux');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertTrue($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('Linux', $metadata->operatingSystem());
    }

    public function testCanBeRequiresOperatingSystemFamily(): void
    {
        $metadata = Metadata::requiresOperatingSystemFamilyOnClass('Linux');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertTrue($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('Linux', $metadata->operatingSystemFamily());
    }

    public function testCanBeRequiresPhp(): void
    {
        $metadata = Metadata::requiresPhpOnClass(
            new ComparisonRequirement(
                '8.0.0',
                new VersionComparisonOperator('>=')
            )
        );

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertTrue($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeRequiresPhpExtension(): void
    {
        $metadata = Metadata::requiresPhpExtensionOnClass('test', null);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertTrue($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('test', $metadata->extension());
        $this->assertFalse($metadata->hasVersionRequirement());

        $this->expectException(NoVersionRequirementException::class);
        $metadata->versionRequirement();
    }

    public function testCanBeRequiresPhpunit(): void
    {
        $metadata = Metadata::requiresPhpunitOnClass(
            new ComparisonRequirement(
                '10.0.0',
                new VersionComparisonOperator('>=')
            )
        );

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertTrue($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());
    }

    public function testCanBeRequiresSetting(): void
    {
        $metadata = Metadata::requiresSettingOnClass('foo', 'bar');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertTrue($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('foo', $metadata->setting());
        $this->assertSame('bar', $metadata->value());
    }

    public function testCanBeTestDox(): void
    {
        $metadata = Metadata::testDoxOnClass('text');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertTrue($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame('text', $metadata->text());
    }

    public function testCanBeTestWith(): void
    {
        $metadata = Metadata::testWith(['a', 'b']);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertTrue($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(['a', 'b'], $metadata->data());
    }

    public function testCanBeUses(): void
    {
        $metadata = Metadata::usesOnClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertTrue($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->target());
    }

    public function testCanBeUsesClass(): void
    {
        $metadata = Metadata::usesClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertTrue($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
        $this->assertSame(self::class, $metadata->asStringForCodeUnitMapper());
    }

    public function testCanBeUsesDefaultClass(): void
    {
        $metadata = Metadata::usesDefaultClass(self::class);

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertTrue($metadata->isUsesDefaultClass());
        $this->assertFalse($metadata->isUsesFunction());

        $this->assertSame(self::class, $metadata->className());
    }

    public function testCanBeUsesFunction(): void
    {
        $metadata = Metadata::usesFunction('f');

        $this->assertFalse($metadata->isAfter());
        $this->assertFalse($metadata->isAfterClass());
        $this->assertFalse($metadata->isBackupGlobals());
        $this->assertFalse($metadata->isBackupStaticProperties());
        $this->assertFalse($metadata->isBeforeClass());
        $this->assertFalse($metadata->isBefore());
        $this->assertFalse($metadata->isCodeCoverageIgnore());
        $this->assertFalse($metadata->isCovers());
        $this->assertFalse($metadata->isCoversClass());
        $this->assertFalse($metadata->isCoversDefaultClass());
        $this->assertFalse($metadata->isCoversFunction());
        $this->assertFalse($metadata->isCoversNothing());
        $this->assertFalse($metadata->isDataProvider());
        $this->assertFalse($metadata->isDependsOnClass());
        $this->assertFalse($metadata->isDependsOnMethod());
        $this->assertFalse($metadata->isDoesNotPerformAssertions());
        $this->assertFalse($metadata->isExcludeGlobalVariableFromBackup());
        $this->assertFalse($metadata->isExcludeStaticPropertyFromBackup());
        $this->assertFalse($metadata->isGroup());
        $this->assertFalse($metadata->isRunClassInSeparateProcess());
        $this->assertFalse($metadata->isRunInSeparateProcess());
        $this->assertFalse($metadata->isRunTestsInSeparateProcesses());
        $this->assertFalse($metadata->isTest());
        $this->assertFalse($metadata->isPreCondition());
        $this->assertFalse($metadata->isPostCondition());
        $this->assertFalse($metadata->isPreserveGlobalState());
        $this->assertFalse($metadata->isRequiresMethod());
        $this->assertFalse($metadata->isRequiresFunction());
        $this->assertFalse($metadata->isRequiresOperatingSystem());
        $this->assertFalse($metadata->isRequiresOperatingSystemFamily());
        $this->assertFalse($metadata->isRequiresPhp());
        $this->assertFalse($metadata->isRequiresPhpExtension());
        $this->assertFalse($metadata->isRequiresPhpunit());
        $this->assertFalse($metadata->isRequiresSetting());
        $this->assertFalse($metadata->isTestDox());
        $this->assertFalse($metadata->isTestWith());
        $this->assertFalse($metadata->isUses());
        $this->assertFalse($metadata->isUsesClass());
        $this->assertFalse($metadata->isUsesDefaultClass());
        $this->assertTrue($metadata->isUsesFunction());

        $this->assertSame('f', $metadata->functionName());
        $this->assertSame('::f', $metadata->asStringForCodeUnitMapper());
    }
}
