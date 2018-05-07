@javascript
Feature: Invalidate properly the frontend cache to always have the freshest data
  In order be able to edit a product with the latest updated data
  As a product manager
  I need to be able to see the last structure data

  Background:
    Given a "footwear" catalog configuration
    And I am logged in as "Julia"
    And the following product:
      | sku   | family |
      | boots | boots  |

  Scenario: Successfully clear the cache when updating a family label
    Given I am on the "boots" product page
    Then I should see the text "Boots"
    Then I am on the "boots" family page
    When I fill in the following information:
      | English (United States) | Awesome boots |
    And I save the family
    Given I am on the "boots" product page
    Then I should see the text "Awesome boots"
    Then I am on the "boots" family page
    When I fill in the following information:
      | English (United States) | Not so awesome boots |
    And I save the family
    Given I am on the "boots" product page
    Then I should see the text "Not so awesome boots"


