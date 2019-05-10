<?php
namespace Page\Acceptance;

class HomePage
{
    /**
     * @var string
     * xpath of elements in the form homepage
     */
    public static $URL = 'https://staging2.formos.com/QATest/';
    public static $new = '//a[text()="New Reservation"]';
    public static $sortID ='//img[@id="id:sort"]';
    public static $sortType = '//img[@id="type:sort"]';
    public static $sortTableID = '//img[@id="tableID:sort"]';
    public static $sortNumberPerson = '//img[@id="numberofperson:sort"]';
    public static $sortDate = '//img[@id="date:sort"]';
    public static $sortDescription = '//a[text()="Description"]';
    public static $sortTime = '//img[@id="startTime:sort"]';
    public static $reloadData = '//a[text()="Reload Data"]';
    public static $delete1 = '(//a[text()="Delete"])[2]';
    public static $edit = '(//a[text()="Edit"])[2]';

}
