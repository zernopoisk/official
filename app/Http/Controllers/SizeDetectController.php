<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeDetectController extends Controller
{
    /**
     * Location Regions.
     */
    public function locationRegions()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.location_regions'),
                ['alias','name','translit','type']
            ), "Location Regions"
        );
    }
    
    /**
     * Location Regions Centers.
     */
    public function locationRegionsCenters()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.location_regions_centers'),
                ['alias','name','translit']
            ), "Location Regions Centers"
        );
    }
    
    /**
     * Location Regions Districts.
     */
    public function locationRegionsDistricts()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.location_regions_districts'),
                ['alias','name','translit']
            ), "Location Regions Districts"
        );
    }
    
    /**
     * Offers Statuses.
     */
    public function offersStatuses()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.offers_statuses'),
                ['alias','name','translit', 'sense']
            ), "Offers Statuses"
        );
    }
    
    /**
     * Seller Types.
     */
    public function sellerTypes()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.sellertypes'),
                ['alias','name','translit']
            ), "Seller Types"
        );
    }
    
    /**
     * Pickup.
     */
    public function pickup()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.pickup'),
                ['alias','name','translit']
            ), "Pickup"
        );
    }

    /**
     * Payment Methods.
     */
    public function paymentMethods()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.payment')['methods'],
                ['alias','name','translit']
            ), "Payment Methods"
        );
    }

    /**
     * Payment Forms.
     */
    public function paymentForms()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.payment')['forms'],
                ['alias','name','translit']
            ), "Payment Forms"
        );
    }

    /**
     * Crops Categories.
     */
    public function cropsCategories()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.crops_categories'),
                ['alias','name','translit']
            ), "Crops Categories"
        );
    }

    /**
     * Crops Classiness.
     */
    public function cropsClassiness()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.crops_classiness'),
                ['alias','name','translit','number']
            ), "Crops Classiness"
        );
    }

    /**
     * Crops.
     */
    public function crops()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.crops'),
                ['alias','name','translit']
            ), "Crops"
        );
    }

    /**
     * Incoterms Groups.
     */
    public function incotermsGroups()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.incoterms_groups'),
                ['alias','name','term_en','specification','available']
            ), "Incoterms Groups"
        );
    }

    /**
     * Incoterms.
     */
    public function incoterms()
    {
        $this->_displayMaxValues(
            $this->_calculateMaxValues(
                config('dict.incoterms'),
                ['group','alias','abbr','term_en','specification','type_of_transport','available']
            ), "Incoterms"
        );
    }
    
    /**
     * Display max values for the specified array.
     */
    private function _displayMaxValues(array $mv, $entityName)
    {
        if (count ($mv) > 0) {
            echo sprintf("<h3>%s</h3>", $entityName);
            foreach ($mv as $key => $val) {
                echo sprintf('%s - <span style="color:red;">%d</span><br>', $key, $val);
            }
        } else {
            echo sprintf('<span style="color:red;">%s</span>', "There is no results found for the specified array.");
        }
    }

    /**
     * Calculates maximum value for array elements.
     * Necessary to create fields of appropriate length in database tables.
     */
    private function _calculateMaxValues(array $a, array $attributes)
    {
        $length = [];
        
        if (count ($a) > 0) {
            // Prepare elements to calculate maximum values.
            foreach ($a as $item) {
                foreach ($item as $key => $value) {
                    if (in_array($key, $attributes, true)) {
                        $length[$key][] = mb_strlen($value);
                    }
                }
            }
        }
        
        if (count ($length) > 0) {
            // Search max value for each element.
            foreach ($length as $key => $values) {
                $length[$key] = max($values);
            }
        }

        return $length;
    }

}
