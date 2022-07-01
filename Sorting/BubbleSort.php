<?php

class BubbleSort
{
    /**
     * Function for Displaying the Elements of the array
     * Passing 'n' length of array and 'array' as parameters
     */
    function display($length, $sort)
    {
        for ($i = 0; $i < $length; $i++) {
            echo $sort[$i] . " ";
        }
    }

    /**
     * Function to sort array by selecting the smallest element
     * Passing the array and length as a parameter
     * Returns the sorted array
     */
    function bubble_sort($length, $data)
    {
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - 1; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $temp = $data[$j];
                    $data[$j] = $data[$j + 1];
                    $data[$j + 1] = $temp;
                } 
            }
        }
        return $data;
    }
}
$bubbleSort = new BubbleSort();

$bubbleSortArray = array(10, 21, 30, -1, 40, -3, 33);
$length = count($bubbleSortArray);
echo "Original Array : ";
$bubbleSort->display($length, $bubbleSortArray);
echo "\nSorted Array : ";
$sortedArray = $bubbleSort->bubble_sort($length, $bubbleSortArray);
$length = count($sortedArray);
$bubbleSort->display($length, $sortedArray);