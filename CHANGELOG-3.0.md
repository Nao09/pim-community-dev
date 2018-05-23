# 3.0

## Technical improvement

- TIP-236: Merge Oro User bundle/component into Akeneo User bundle/component 

## Enhancements

- TIP-832: Enable regional languages for UI

## BC breaks

- Move `Pim\Component\Catalog\Validator\Constraints\ActivatedLocale` to `Akeneo\Channel\Component\Validator\Constraint\ActivatedLocale`
- Move `Pim\Component\Catalog\Validator\Constraints\Locale` to `Akeneo\Channel\Component\Validator\Constraint\Locale`
- Move `Pim\Bundle\CatalogBundle\Doctrine\ORM\Repository\LocaleRepository` to `Akeneo\Channel\Bundle\Doctrine\Repository\LocaleRepository`
- Move `Pim\Component\Catalog\Repository\LocaleRepositoryInterface` to `Akeneo\Channel\Component\Repository\LocaleRepositoryInterface`
- Move `Pim\Bundle\CatalogBundle\Entity\Locale` to `Akeneo\Channel\Component\Model\Locale`
- Move `Pim\Component\Catalog\Model\LocaleInterface` to `Akeneo\Channel\Component\Model\LocaleInterface`
- Move `Pim\Bundle\UserBundle\Entity\UserInterface` to `Akeneo\UserManagement\Component\Model\UserInterface`
- Move `Pim\Bundle\UserBundle\Entity\User` to `Akeneo\UserManagement\Component\Model\User`
- Move `Oro\Bundle\UserBundle\Entity\Group` to `Akeneo\UserManagement\Component\Model\Group`
- Move `Oro\Bundle\UserBundle\Entity\Role` to `Akeneo\UserManagement\Component\Model\Role`
- Move `Oro\Bundle\UserBundle\Entity\UserManager` to `Akeneo\UserManagement\Bundle\Manager\UserManager`
- Move `Oro\Bundle\UserBundle\OroUserEvents` to `Akeneo\UserManagement\Component\UserEvents`
- Move `Pim\Bundle\UserBundle\Bundle\Controller\UserGroupRestController` to `Akeneo\UserManagement\Bundle\Controller\Rest\UserGroupController`
- Move `Pim\Bundle\UserBundle\Bundle\Controller\SecurityRestController` to `Akeneo\UserManagement\Bundle\Controller\Rest\SecurityController`
- Move `Pim\Bundle\UserBundle\Bundle\Controller\UserRestController` to `Akeneo\UserManagement\Bundle\Controller\Rest\UserController`
- Move all classes from `Oro\Bundle\UserBundle\Controller` to `Akeneo\UserManagement\Bundle\Controller`
- Move all classes from `Oro\Bundle\UserBundle\EventListener` to `Akeneo\UserManagement\Bundle\EventListener`
- Move all classes from `Oro\Bundle\UserBundle\Form\EventListener` to `Akeneo\UserManagement\Bundle\Form\Subscriber`
- Move all classes from `Oro\Bundle\UserBundle\Entity\Repository` to `Akeneo\UserManagement\Bundle\Doctrine\ORM\Repository`
- Move `Oro\Bundle\UserBundle\Entity\EntityUploadedImageInterface` to `Akeneo\UserManagement\Component\EntityUploadedImageInterface`
- Move `Oro\Bundle\UserBundle\Entity\EventListener\UploadedImageSubscriber` to `Akeneo\UserManagement\Bundle\EventSubscriber\UploadedImageSubscriber`
- Move `Oro\Bundle\UserBundle\Form\Handler\AbstractUserHandler` to `Akeneo\UserManagement\Bundle\Form\Handler\AbstractUserHandler`
- Move `Oro\Bundle\UserBundle\Form\Handler\GroupHandler` to `Akeneo\UserManagement\Bundle\Form\Handler\GroupHandler`
- Move `Oro\Bundle\UserBundle\Form\Type\ChangePasswordType` to `Akeneo\UserManagement\Bundle\Form\Type\ChangePasswordType`
- Move `Oro\Bundle\UserBundle\Form\Type\GroupApiType` to `Akeneo\UserManagement\Bundle\Form\Type\GroupApiType`
- Move `Oro\Bundle\UserBundle\Form\Type\GroupType` to `Akeneo\UserManagement\Bundle\Form\Type\GroupType`
- Move `Oro\Bundle\UserBundle\Form\Type\ResetType` to `Akeneo\UserManagement\Bundle\Form\Type\ResetType`
- Move `Oro\Bundle\UserBundle\Security\UserProvider` to `Akeneo\UserManagement\Bundle\Security\UserProvider`
- Move `Pim\Bundle\UserBundle` to `Akeneo\UserManagement\Bundle`
- Move `Pim\Component\User` to `Akeneo\UserManagement\Component`
- Merge `Oro\Bundle\UserBundle\Form\Handler\AclRoleHandler` with `Akeneo\UserManagement\Bundle\Form\Handler\AclRoleHandler`
- Merge `Oro\Bundle\UserBundle\Form\Handler\ResetHandler` with `Akeneo\UserManagement\Bundle\Form\Handler\ResetHandler`
- Merge `Oro\Bundle\UserBundle\Form\Handler\UserHandler` with `Akeneo\UserManagement\Bundle\Form\Handler\UserHandler`
- Merge `Oro\Bundle\UserBundle\Form\Type\AclRoleType` with `Akeneo\UserManagement\Bundle\Form\Type\AclRoleType`
- Merge `Oro\Bundle\UserBundle\Form\Type\RoleApiType` with `Akeneo\UserManagement\Bundle\Form\Type\RoleApiType`
- Merge `Oro\Bundle\UserBundle\Entity\UserManager` with `Akeneo\UserManagement\Bundle\Manager\UserManager`

- Remove `Oro\Bundle\UserBundle\OroUserBundle`
- Remove `Oro\Bundle\UserBundle\DependencyInjection`
- Remove `Pim\Bundle\ImportExportBundle\JobLabel\TranslatedLabelProvider`

- Change constructor of `Pim\Bundle\ImportExportBundle\Datagrid\JobDatagridProvider`, remove `Pim\Bundle\ImportExportBundle\JobLabel\TranslatedLabelProvider` argument 
- Change constructor of `Pim\Bundle\ImportExportBundle\Form\Type\JobInstanceFormType`, remove `Pim\Bundle\ImportExportBundle\JobLabel\TranslatedLabelProvider` argument 
- Change constructor of `Pim\Bundle\ImportExportBundle\Normalizer\JobExecutionNormalizer`, remove `Pim\Bundle\ImportExportBundle\JobLabel\TranslatedLabelProvider` argument 
- Change constructor of `Pim\Bundle\ImportExportBundle\Normalizer\StepExecutionNormalizer`, remove `Pim\Bundle\ImportExportBundle\JobLabel\TranslatedLabelProvider` argument  

- Change constructor of `Akeneo\UserManagement\Bundle\Form\Type\UserType`, remove `Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface` and `Akeneo\UserManagement\Bundle\Form\Subscriber\UserSubscriber` argument  

- Move namespace `Pim\Component\Api` to `Akeneo\Tool\Component\Api`
- Move namespace `Pim\Bundle\ApiBundle` to `Akeneo\Tool\Bundle\ApiBundle`
- Move namespace `Pim\Component\Batch` to `Akeneo\Tool\Component\Batch`
- Move namespace `Pim\Bundle\BatchBundle` to `Akeneo\Tool\Bundle\BatchBundle`
- Move namespace `Pim\Component\BatchQueue` to `Akeneo\Tool\Component\BatchQueue`
- Move namespace `Pim\Bundle\BatchQueueBundle` to `Akeneo\Tool\Bundle\BatchQueueBundle`
- Move namespace `Pim\Component\StorageUtilsQueue` to `Akeneo\Tool\Component\StorageUtilsQueue`
- Move namespace `Pim\Bundle\StorageUtilsQueueBundle` to `Akeneo\Tool\Bundle\StorageUtilsQueueBundle`
- Move namespace `Pim\Bundle\ElasticsearchBundle` to `Akeneo\Tool\Bundle\ElasticsearchBundle`
- Move namespace `Pim\Component\Analytics` to `Akeneo\Tool\Component\Analytics`
- Move namespace `Pim\Component\Buffer` to `Akeneo\Tool\Component\Buffer`
- Move namespace `Pim\Component\Console` to `Akeneo\Tool\Component\Console`
- Move namespace `Pim\Component\Localization` to `Akeneo\Tool\Component\Localization`
- Move namespace `Pim\Component\Versionning` to `Akeneo\Tool\Component\Versionning`
- Move namespace `Pim\Bundle\MeasureBundle` to `Akeneo\Tool\Bundle\MeasureBundle`
- Move namespace `Pim\Component\FileStorage` to `Akeneo\Tool\Component\FileStorage`
- Move namespace `Pim\Bundle\FileStorageBundle` to `Akeneo\Tool\Bundle\FileStorageBundle`
- Move namespace `Pim\Component\Classification` to `Akeneo\Tool\Component\Classification`
- Move namespace `Pim\Bundle\ClassificationBundle` to `Akeneo\Tool\Bundle\ClassificationBundle`
- Move namespace `Pim\Bundle\BufferBundle` to `Akeneo\Tool\Bundle\BufferBundle`
- Move `Akeneo\Tool\Bundle\ApiBundle\Controller\ChannelController` to `Akeneo\Channel\Bundle\Controller\ExternalApi\ChannelController`
- Move `Akeneo\Tool\Bundle\ApiBundle\Controller\ChannelController` to `Akeneo\Channel\Bundle\Controller\ExternalApi\ChannelController`
- Move `Pim\Bundle\EnrichBundle\Controller\Rest\ChannelController` to `Akeneo\Channel\Bundle\Controller\InternalApi\ChannelController`
- Move `Pim\Bundle\CatalogBundle\Doctrine\Common\Remover\ChannelRemover` to `Akeneo\Channel\Bundle\Doctrine\Remover\ChannelRemover`
- Move `Pim\Bundle\CatalogBundle\Doctrine\ORM\Repository\ChannelRepository` to `Akeneo\Channel\Bundle\Doctrine\Repository\ChannelRepository`
- Move `Pim\Bundle\EnrichBundle\EventListener\Storage\ChannelLocaleSubscriber` to `Akeneo\Channel\Bundle\EventListener\ChannelLocaleSubscriber`
- Change constructor of `Akeneo\Channel\Bundle\EventListener\ChannelLocaleSubscriber`, remove `Pim\Component\Catalog\Completeness\CompletenessRemoverInterface` argument  
- Move `Pim\Bundle\CatalogBundle\Entity\Channel` to `Akeneo\Channel\Component\Model\Channel`
- Move `Pim\Component\Catalog\Model\ChannelInterface` to `Akeneo\Channel\Component\Model\ChannelInterface`
- Move `Pim\Bundle\CatalogBundle\Entity\ChannelTranslation` to `Akeneo\Channel\Component\Model\ChannelTranslation`
- Move `Pim\Component\Catalog\Model\ChannelTranslationInterface` to `Akeneo\Channel\Component\Model\ChannelTranslationInterface`
- Move `Akeneo\Tool\Component\Api\Normalizer\ChannelNormalizer` to `Akeneo\Channel\Component\Normalizer\ExternalApi\ChannelNormalizer`
- Move `Pim\Bundle\EnrichBundle\Normalizer\ChannelNormalizer` to `Akeneo\Channel\Component\Normalizer\InternalApi\ChannelNormalizer`
- Move `Pim\Component\Catalog\Normalizer\Standard\ChannelNormalizer` to `Akeneo\Channel\Component\Normalizer\Standard\ChannelNormalizer`
- Move `Pim\Bundle\VersioningBundle\Normalizer\Flat\ChannelNormalizer` to `Akeneo\Channel\Component\Normalizer\Versioning\ChannelNormalizer`
- Move `Pim\Component\Catalog\Repository\ChannelRepositoryInterface` to `Akeneo\Channel\Component\Repository\ChannelRepositoryInterface`
- Move `Pim\Component\Catalog\Updater\ChannelUpdater` to `Akeneo\Channel\Component\Updater\ChannelUpdater`
- Move `Pim\Component\Catalog\Updater\LocaleUpdater` to `Akeneo\Channel\Component\Updater\LocaleUpdater`
- Move `Akeneo\Tool\Component\Api\Normalizer\LocaleNormalizer` to `Akeneo\Channel\Component\Normalizer\ExternalApi\LocaleNormalizer`
- Move `Pim\Bundle\EnrichBundle\Normalizer\LocaleNormalizer` to `Akeneo\Channel\Component\Normalizer\InternalApi\LocaleNormalizer`
- Move `Pim\Bundle\VersioningBundle\Normalizer\Flat` to `Akeneo\Channel\Component\Normalizer\Versioning`
- Move `Pim\Component\Catalog\Model\CurrencyInterface` to `Akeneo\Channel\Component\Model\CurrencyInterface`
- Move `Pim\Bundle\CatalogBundle\Doctrine\ORM\Repository\CurrencyRepository` to `Akeneo\Channel\Bundle\Doctrine\Repository\CurrencyRepository`
- Move `Pim\Bundle\CatalogBundle\EventSubscriber\CurrencyDisablingSubscriber` to `Akeneo\Channel\Bundle\EventListener\CurrencyDisablingSubscriber`
- Move `Akeneo\Tool\Component\Api\Normalizer\CurrencyNormalizer` to `Akeneo\Tool\Component\Api\Normalizer\CurrencyNormalizer`
- Move `Pim\Component\Catalog\Normalizer\Standard\CurrencyNormalizer` to `Akeneo\Channel\Component\Normalizer\Standard\CurrencyNormalizer`
- Move `Pim\Component\Catalog\Repository\CurrencyRepositoryInterface` to `Akeneo\Channel\Component\Repository\CurrencyRepositoryInterface`
- Move `Pim\Component\Catalog\Updater\CurrencyUpdater` to `Akeneo\Channel\Component\Updater\CurrencyUpdater`
- Move `Pim\Component\Connector\ArrayConverter\FlatToStandard\Channel` to `Akeneo\Channel\Component\ArrayConverter\FlatToStandard\Channel`
- Move `Pim\Component\Connector\ArrayConverter\FlatToStandard\Locale` to `Akeneo\Channel\Component\ArrayConverter\FlatToStandard\Locale`
- Move `Pim\Component\Connector\ArrayConverter\FlatToStandard\Currency` to `Akeneo\Channel\Component\ArrayConverter\FlatToStandard\Currency`
- Move `Pim\Component\Connector\ArrayConverter\StandardToFlat\Channel` to `Akeneo\Channel\Component\ArrayConverter\StandardToFlat\Channel`
- Move `Pim\Component\Connector\ArrayConverter\StandardToFlat\Locale` to `Akeneo\Channel\Component\ArrayConverter\StandardToFlat\Locale`
- Move `Pim\Component\Connector\ArrayConverter\StandardToFlat\Currency` to `Akeneo\Channel\Component\ArrayConverter\StandardToFlat\Currency`
- Move `Pim\Component\Catalog\Exception\LinkedChannelException` to `Akeneo\Channel\Component\Exception\LinkedChannelException`
- Move `Pim\Component\Catalog\Model\ReferableInterface` to `Akeneo\Tool\Component\StorageUtils\Model\ReferableInterface`
- Remove method `getChoiceValue` and `getChoiceLabel` from `Akeneo\Channel\Component\Model\Channel`
- Change the constructor of `Akeneo\Channel\Component\Normalizer\InternalApi\ChannelNormalizer` to replace `Pim\Bundle\VersioningBundle\Manager\VersionManager` by `Pim\Bundle\VersioningBundle\Repository\VersionRepositoryInterface`
- Change the constructor of `Akeneo\UserManagement\Bundle\Context\UserContext` to remove `Pim\Bundle\CatalogBundle\Builder\ChoicesBuilderInterface`
- Remove class `Pim\Bundle\CatalogBundle\Builder\ChoicesBuilder` 
- Remove class `Pim\Bundle\CatalogBundle\Builder\ChoicesBuilderInterface` 
