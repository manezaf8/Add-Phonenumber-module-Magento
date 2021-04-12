# Module Maneza Phonenumber

    ``maneza/module-phonenumber``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
- Adding a contact number field to a customer reg form.
- adding the a customer attribute in the db
- displays the phone number input in customer reg form 
- Displays the phone number in the customer account dashboard
- allows you to edit the phone number
- Displays the phone number in the admin customer details.
- Displays the input in the add new customer form in the admin
- Allows you to edit the customer phone number in the admin section

## Installation
\* = in production please use the `--keep-generated` option when running `bin/magento setup:upgrade`

### Type 1: Zip file

 - Unzip the zip file in `app/code/Maneza`
 - Enable the module by running `php bin/magento module:enable Maneza_Phonenumber`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require maneza/module-phonenumber`
 - enable the module by running `php bin/magento module:enable Maneza_Phonenumber`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Helper
	- Reistration > reistration.phtml


## Attributes

 - Customer - contact_number (contact_number)

