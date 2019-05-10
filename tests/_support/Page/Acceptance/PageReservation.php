<?php
namespace Page\Acceptance;

class PageReservation
{
    /**
     * @var string
     * xpath of elements in the form page creat Reservation
     */
    public static $URL2 = '/reservationform';
    public static $tableID = '//input[@id="tableID"]';
    public static $numberPerson = '//input[@id="numberofperson"]';
    public static $date = '//input[@id="date"]';
    public static $description = '//textarea[@id="description"]';
    public static $startTime = '//input[@id="startTime"]';
    public static $btnAdd = '//input[@class="t-beaneditor-submit"]';
    public static $clear = '//a[text()="clear"]';
}
