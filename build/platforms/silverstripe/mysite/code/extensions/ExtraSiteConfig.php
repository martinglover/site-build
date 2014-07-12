<?php
/**
 * ExtraSiteConfig.php (http://zucchi.co.uk)
 *
 * @link      http://github.com/zucchi/ZucchiModel for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zucchi Limited. (http://zucchi.co.uk)
 * @license   http://zucchi.co.uk/legals/bsd-license New BSD License
 */

/**
 * Class ExtraSiteConfig
 *
 * @author Martin Glover <martin@zucchi.co.uk>
 */
class ExtraSiteConfig extends DataExtension
{
    private static $db = array(
        'Telephone' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Address' => 'Text',

        'TwitterLink' => 'Varchar(255)',
        'FacebookLink' => 'Varchar(255)',
        'GooglePlusLink' => 'Varchar(255)',
        'LinkedinLink' => 'Varchar(255)',
//        'InstagramLink' => 'Varchar(255)',
//        'PinterestLink' => 'Varchar(255)',
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Details',
            array(
                new HeaderField('CompanyDetails', 'Company Details'),
                new TextField('Telephone', 'Telephone'),
                new TextField('Email', 'Email'),
                new TextareaField('Address', 'Address'),

                new HeaderField('SocialFields', 'Social Links'),
                new TextField('TwitterLink', 'Twitter Link'),
                new TextField('FacebookLink', 'Facebook Link'),
                new TextField('GooglePlusLink', 'Google+ Link'),
                new TextField('LinkedinLink', 'LinkedIn Link'),
//                new TextField('InstagramLink', 'Instagram Link'),
//                new TextField('PinterestLink', 'Pinterest Link'),
            )
        );
    }
}