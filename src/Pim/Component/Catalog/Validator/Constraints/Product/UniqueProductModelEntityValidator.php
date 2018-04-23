<?php

namespace Pim\Component\Catalog\Validator\Constraints\Product;

use Akeneo\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface;
use Pim\Component\Catalog\Model\ProductModelInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

/**
 * @author    Arnaud Langlade <arnaud.langlade@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class UniqueProductModelEntityValidator extends ConstraintValidator
{
    /** @var IdentifiableObjectRepositoryInterface */
    private $objectRepository;

    /**
     * @param IdentifiableObjectRepositoryInterface $objectRepository
     */
    public function __construct(IdentifiableObjectRepositoryInterface $objectRepository)
    {
        $this->objectRepository = $objectRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($entity, Constraint $constraint)
    {
        if (!$constraint instanceof UniqueProductModelEntity) {
            throw new UnexpectedTypeException($constraint, UniqueProductEntity::class);
        }

        if (!$entity instanceof ProductModelInterface) {
            throw new UnexpectedTypeException($constraint, ProductModelInterface::class);
        }

        if (null === $entityInDatabase = $this->objectRepository->findOneByIdentifier($entity->getCode())) {
            return;
        }

        // here this is an update, we need to update the same object
        if ($entity->getId() !== $entityInDatabase->getId()) {
            $this->context->buildViolation($constraint->message)
                ->atPath('code')
                ->addViolation();
        }
    }
}