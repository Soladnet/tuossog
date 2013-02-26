<?php

class SortMultiArray {

    var $ResultArray;

    /**
     * SortMultiArray() -- Constructor
     * sort a multi-dimmensional array
     * @param Array InArray - the array (ex. array(array("key1"=>"value","key2"=>"value",...),array("key1"=>"value","key2"=>"value",...),...)
     * @param int Column - the column number to sort by (can also be associative key name)
     * @param int SortType - 0 for ascending, 1 for descending 
     * @param int Flag - sorting type , check function sort() (optional)
     */
    function SortMultiArray($InArray, $Column, $SortType, $Flag = SORT_REGULAR) {
        //initialize variables
        $TmpArray = array();
        $ResultArray = array();
        $Index = 0;

        //create a temporary array with the column that needs 
        //sorting from the multi-dimmensional associative array
        foreach ($InArray as $Value)
            $TmpArray[$Index++] = $Value[$Column];

        //sort the temporary array
        ($SortType) ? arsort($TmpArray, $Flag) : asort($TmpArray, $Flag);

        $Index = 0;
        //create new sorted array
        while (list ($key, $val) = each($TmpArray))
            $this->ResultArray[$Index++] = $InArray[$key];
    }

    /**
     * GetSortedArray()
     * fetch the sorted array
     * @return Array - multi-dimensional array sorted
     */
    /**
     * fetch the sorted array
     * @param int start
     * @param int limit
     * @return Array - multi-dimensional array sorted
     */
    function GetSortedArray($start, $limit) {
        $arr = array();
        for ($i = 0; $i < count($this->ResultArray); $i++) {
            if ($i >= $start) {
                $arr[] = $this->ResultArray[$i];
                if ($i == $limit) {
                    break;
                }
            }
        }
        return $arr;
//        return $this->ResultArray;
    }

}

?>