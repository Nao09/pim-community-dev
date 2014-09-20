<?php

namespace spec\Pim\Bundle\CatalogBundle\Doctrine\ORM\Filter;

use PhpSpec\ObjectBehavior;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query\Expr;
use Pim\Bundle\CatalogBundle\Model\AbstractAttribute;
use Pim\Bundle\CatalogBundle\Context\CatalogContext;

class PriceFilterSpec extends ObjectBehavior
{
    function let(QueryBuilder $queryBuilder, CatalogContext $context)
    {
        $context->getLocaleCode()->willReturn('en_US');
        $context->getScopeCode()->willReturn('mobile');
        $this->beConstructedWith($context);
        $this->setQueryBuilder($queryBuilder);
    }

    function it_is_a_filter()
    {
        $this->shouldImplement('Pim\Bundle\CatalogBundle\Doctrine\Query\AttributeFilterInterface');
    }

    function it_supports_operators()
    {
        $this->getOperators()->shouldReturn(['=', '<', '<=', '>', '>=', 'EMPTY']);
        $this->supportsOperator('=')->shouldReturn(true);
        $this->supportsOperator('FAKE')->shouldReturn(false);
    }

    function it_adds_a_equals_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->innerJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $condition = "filterPprice.currency = 'EUR' AND filterPprice.data = '12'";
        $queryBuilder->innerJoin('filterprice.prices', 'filterPprice', 'WITH', $condition)->shouldBeCalled();

        $this->addAttributeFilter($price, '=', '12 EUR');
    }

    function it_adds_a_greater_than_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->innerJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $condition = "filterPprice.currency = 'EUR' AND filterPprice.data > '12'";
        $queryBuilder->innerJoin('filterprice.prices', 'filterPprice', 'WITH', $condition)->shouldBeCalled();

        $this->addAttributeFilter($price, '>', '12 EUR');
    }

    function it_adds_a_greater_than_or_equals_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->innerJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $condition = "filterPprice.currency = 'EUR' AND filterPprice.data >= '12'";
        $queryBuilder->innerJoin('filterprice.prices', 'filterPprice', 'WITH', $condition)->shouldBeCalled();

        $this->addAttributeFilter($price, '>=', '12 EUR');
    }

    function it_adds_a_less_than_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->innerJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $condition = "filterPprice.currency = 'EUR' AND filterPprice.data < '12'";
        $queryBuilder->innerJoin('filterprice.prices', 'filterPprice', 'WITH', $condition)->shouldBeCalled();

        $this->addAttributeFilter($price, '<', '12 EUR');
    }

    function it_adds_a_less_than_or_equals_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->innerJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $condition = "filterPprice.currency = 'EUR' AND filterPprice.data <= '12'";
        $queryBuilder->innerJoin('filterprice.prices', 'filterPprice', 'WITH', $condition)->shouldBeCalled();

        $this->addAttributeFilter($price, '<=', '12 EUR');
    }

    /** TODO : to fix
    function it_adds_an_empty_filter_in_the_query(QueryBuilder $queryBuilder, AbstractAttribute $price)
    {
        $price->getId()->willReturn(42);
        $price->getCode()->willReturn('price');
        $price->getBackendType()->willReturn('prices');
        $price->isLocalizable()->willReturn(false);
        $price->isScopable()->willReturn(false);

        $queryBuilder->expr()->willReturn(new Expr());
        $queryBuilder->getRootAlias()->willReturn('p');

        $condition = "filterprice.attribute = 42";
        $queryBuilder->leftJoin('p.values', 'filterprice', 'WITH', $condition)->shouldBeCalled();

        $queryBuilder->leftJoin('filterprice.prices', 'filterPprice')->shouldBeCalled();

//        $queryBuilder->expr()->isNull('filterPprice.id')->shouldBeCalled();
//        $queryBuilder->expr()->orX('filterPprice.currency = '' AND filterPprice.data IS NULL')->shouldBeCalled();

//        $queryBuilder->where();

        $this->addAttributeFilter($price, 'EMPTY', ' ');
    }*/
}
