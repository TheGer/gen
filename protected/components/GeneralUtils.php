<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GeneralUtils
 *
 * @author Gerry
 */
class GeneralUtils extends CHtml {

    //put your code here
    //get the enum values for a field
    public static function enumItem($model, $attribute) {
        $attr = $attribute;
        self::resolveName($model, $attr);
        preg_match('/\((.*)\)/', $model->tableSchema->columns[$attr]->dbType, $matches);
        foreach (explode(',', $matches[1]) as $value) {
            $value = str_replace("'", null, $value);
            $values[$value] = Yii::t('enumItem', $value);
        }

        return $values;
    }
    
    public static function getRange($start,$end,$step)
    {
        $arrvalues = array();
        $range = range($start,$end,$step);
            foreach ($range as $elem) {
            $arrvalues[] = $elem;
 
        }
        return $arrvalues;
    }
    
    

    public static function getGenderOptions() {
        return array('Male' => 'Male', 'Female' => 'Female');
    }
    
    
    public static function getCountriesOfOrigin() {
        return array('Afghanistan' => 'Afghanistan',
'Aland Islands' =>'Aland Islands',
'Albania' =>'Albania',
'Algeria'=>'Algeria',
'American Samoa'=>'American Samoa',
'Andorra' => 'Andorra',
'Angola' => 'Angola',
'Anguilla' =>'Anguilla',
'Austria' =>'Austria',
'Belgium' => 'Belgium',
'Bosnia And Herzegovina' => 'Bosnia And Herzegovina',
'Bulgaria'=>'Bulgaria',
'Cyprus'=>'Cyprus',
'Czech Republic'=>'Czech Republic',
'Denmark'=>'Denmark',
'Estonia'=>'Estonia',
'Finland'=>'Finland',
'France'=>'France',
'Germany'=>'Germany',
'Gibraltar'=>'Gibraltar',
'Greece'=>'Greece',
'Holy See (Vatican City State)'=>'Holy See (Vatican City State)',
'Hungary'=>'Hungary',
'Iceland'=>'Iceland',
'Ireland'=>'Ireland',
'Isle Of Man'=>'Isle Of Man',
'Italy'=>'Italy',
'Latvia'=>'Latvia',
'Liechtenstein'=>'Liechtenstein',
'Lithuania'=>'Lithuania',
'Luxembourg'=>'Luxembourg',
'Macedonia, The Former Yugoslav Republic Of'=>'Macedonia, The Former Yugoslav Republic Of',
'Malta'=>'Malta',
'Monaco'=>'Monaco',
'Morocco'=>'Morocco',
'Netherlands'=>'Netherlands',
'Norway'=>'Norway',
'Poland'=>'Poland',
'Portugal'=>'Portugal',
'Romania'=>'Romania',
'Russian Federation'=>'Russian Federation',
'San Marino'=>'San Marino',
'Serbia And Montenegro'=>'Serbia And Montenegro',
'Slovakia'=>'Slovakia',
'Slovenia'=>'Slovenia',
'Spain'=>'Spain',
'Sweden'=>'Sweden',
'Switzerland'=>'Switzerland',
'United Kingdom'=>'United Kingdom',
'(Not Specified)'=>'(Not Specified)'
);
    }
    

    public static function getOptions() {
        return array('Yes' => 'Yes', 'No' => 'No');
    }

    public static function consanguinity() {
        return array('Yes' => 'Yes', 'No' => 'No', 'Not known' => 'Not known');
    }

    public static function sporadicOrFamily() {
        return array('Sporadic' => 'Sporadic', 'Family' => 'Family');
    }

}

?>
