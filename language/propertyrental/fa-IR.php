<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.18
 *
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'رزرو سریع');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'نمایش پروفایل');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'تنظیمات کسب و کار');
jr_define('_JOMRES_COM_MR_BACK', 'بازگشت');
jr_define('_JOMRES_COM_MR_YES', 'بله');
jr_define('_JOMRES_COM_MR_NO', 'خیر');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'جدید');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'کسب و کار جدید');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'امکانات کسب و کار جدید');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'مهمان جدید');
jr_define('_JOMRES_COM_MR_SAVE', 'ذخیره');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'نام کامل');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'زمان ورود');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'زمان خروج');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'دسترسی مدیریت به کاربر');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID', 'شناسه');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME', 'نام');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'شناسه کاربری');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'در حال حاضر دسترسی دارد (برای برداشتن دسترسی کلیک کنید)');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'کسب و کار پیش فرض');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'تغییر این');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'سطح دسترسی');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'پیام کاربر');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'تعریف نشده');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'رسپشن');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'مدیر کسب و کار');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'همه رزروها');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'رزرو های جدید');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'تغییر در رزرو');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'زمان ورود/خروج');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'مهمان');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'اتاق');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'پرداخت');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'نام');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'نام خانوادگی');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'درخواست های خاص');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'لطفا در نظر داشته باشید که درخواست های خاص ممکن است با هزینه اضافه همراه باشد.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'لغو رزرو');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'پلاک یا نام ساختمان');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'خیابان');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'شهر/شهرک');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'کد پستی');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'تلفن ثابت');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'موبایل');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'آدرس ایمیل');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'امکان لغو این رزرو به دلیل اینکه مهمانان وارد شده اند وجود ندارد.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'بیعانه پرداخت نشده');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'تایید لغو رزرو');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'رزرو لغو شد');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'روزهای باقی مانده تا ورود');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'نوع رزرو');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'سیاه');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'رسپشن');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'اینترنت');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'نام اتاق');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'اتاق');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'طبقه');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'امکان دسترسی معلولین دارد؟');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'حداکثر نفرات');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'نوع کسب و کار');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'توضیحات کسب و کار');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'لیست امکانات');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'بیعانه پرداخت شده');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'بیعانه را وارد کنید');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'کل بها قابل پرداخت');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'شماره بیعانه');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'شماره رزرو');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'به بیعانه نیاز دارد');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'بیعانه ذخیره شد');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'عنوان');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'نام ملک');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'نوع ملک');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'تغییر در مشخصات مهمان');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'نام');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'نام خانوادگی');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'پلاک یا نام ساختمان');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'خیابان');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'شهر یا شهرک');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'کد پستی');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'تلفن ثابت');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'موبایل');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'فکس');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'شماره کارت بانکی');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'تاریخ دریافت کارت');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'تاریخ انقضا');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'cvv');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'نام صاحب کارت');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'انتخاب کنید');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'شب');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'تعداد مهمانان');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'بها کل');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'نشان دادن تنظیمات کسب و کار');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'ایجاد اتاق');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'امکانات اتاق');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'نوع اتاق');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'کسب و کار');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'امکانات ملک');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'اتاق');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'نوع');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'نام');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'شماره');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'طبقه');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'امکانات دسترسی معلولین');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'حداکثر مهمانان');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'امکانات');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'ایجاد اتاق');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'تغییر این مورد');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'امکانات اتاق');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'جزئیات');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'امکانات اضافه شد');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'امکانات به روز شد');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'نوع اتاق');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'مخفف نام اتاق');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'توضیحات');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'نوع اتاق اضافه شد');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'نوع اتاق به روز شد');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'تغییر');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'نام');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'خیابان');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'شهر یا شهرک');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'منطقه');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'استان');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'کد پستی');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'تلفن');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'فکس');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'ایمیل');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'وب سایت');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'امکانات');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'اضافه شد');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'به روز شد');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'امکانات');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'مخفف امکانات');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'توضیحات کامل');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'اضافه شد');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'به روز شد');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'تعرفه ها');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'عنوان تعرفه');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'توضیحات');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'اعتبار از تاریخ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'اعتبار تا تاریخ');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'قیمت برای هر شب');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'حداقل روزها');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'حد اکثر روزها');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'حداقل مهمانان');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'حداکثر مهمانان');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'کلاس اتاق');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignore PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'قابل اجاره در تعطیلات');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'تعرفه اضافه شد');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'تعرفه به روز شد');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'تغییر');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'کپی کردن این مورد');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'تعرفه حذف شد');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'تغییر تعرفه');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'تعطیلات رسمی');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'رزرو ذخیره شد');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'اضافه کردن مهمان');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'حذف مهمان');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'لیست رزروها');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'رزرو جدید');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'منوی اصلی');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'مدیر مهمان');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'مدیر ملک');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'بررسی ');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'موارد را تائیید کنید');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'نام');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'نام خانوادگی');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'پلاک');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'خیابان');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'شهر');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'کد پستی');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'تلفن ثابت');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'موبایل');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'اتاق مورد نظر شما با توجه به موارد انتخابی یافت نشد');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'از رزرو شما سپاسگزاریم.<br><br> در نظر داشته باشید که این رزرو موقت است و تا وقتی ایمیل تائید را دریافت نکردید اعتبار ندارد.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'رزرو مهمان');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'انتخاب مهمان');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'مهمان وارد شد');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'مهمانی امروز وارد نمی شود');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'مهمان خارج شد');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'مهمانی امروز خارج نمی شود');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'supplements');
jr_define('_JOMRES_COM_A_TARIFFS', 'تعرفه و واحد پول');
jr_define('_JOMRES_COM_A_DISCOUNTS', 'تخفیف');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'ارسال فایل');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS', 'تنظیمات جاری');
jr_define('_JOMRES_COM_A_EXPLANATION', 'توضیحات');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'هزینه امکانات برای هر نفر');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'در صورتی که می خواهید هزینه برای هر نفر حساب شوداین گزینه را انتخاب نمایید');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'هزینه برای هر نفر');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'درصد مورد نیاز برای بیعانه');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'آیا بیعانه درصدی از بها کل است؟');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'بها بیعانه');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'برای هر نفر در هر شب');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'تعرفه به صورت هر نفر هر شب حساب شود؟');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'حجم فایل');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'حداکثر حجم فایل تصاویر');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Resources booked');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'جزئیات رزرو');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'چاپ تاییدیه');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'چاپ فاکتور');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', ':تعداد شب ها');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED', 'پیش قرارداد مورد تایید است');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', ':قیمت هر شب');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', ':بها کل');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1', 'از شما متشکریم');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'به امید دیدار مجدد شما');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'چاپ فاکتور');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'اضافه کردن سرویس به فاکتور');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'توضیح سرویس');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'بها سرویس');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'موارد دیگر');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'بها کل موارد دیگر');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'مورد به فاکتور اضافه شد');
jr_define('_JOMRES_UPLOAD_IMAGE', 'ارسال تصویر');
jr_define('_JOMRES_FILE_UPLOAD', 'ارسال فایل');
jr_define('_JOMRES_FILE_ERROR_TYPE', "\n:شما فقط اجازه ارسال این نوع فایل را دارید");
jr_define('_JOMRES_FILE_ERROR_EMPTY', 'لطفا فایل را برای ارسال انتخاب کنید');
jr_define('_JOMRES_FILE_ERROR_NAME', 'نام فایل باید فقط از حروف و عدد بدون فاصله تشکیل شده باشد');
jr_define('_JOMRES_FILE_ERROR_SIZE', 'سایز فایل بیشتر از سایز تعریف شده است');
jr_define('_JOMRES_FILE_NOT_UPLOADED', 'فایل ارسال نشد');
jr_define('_JOMRES_FILE_UPDATED', 'فایل با موفقیت ارسال شد');
jr_define('_JOMRES_COM_A_JSCALENDAR', 'تقویم جاوا');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE', 'فایل زبان تقویم جاوا');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'فایل زبان تقویم جاوا را انتخاب کنید..در نظر داشته باشید که برخی فایلها با مشکل همراهند See http://sourceforge.net/tracker/?group_id=75569&atid=544287 for more information');
jr_define('_JOMRES_COM_A_CALENDARCSS', 'فایل CSS برای تقویم جاوا');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC', 'فایل سی اس اس مناسب برای تقویم جاوا را انتخاب کنید');
jr_define('_JOMRES_COM_A_ODDS', 'متفرقه');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'حذف کردن این فایل');
jr_define('_JOMRES_FILE_DELETED', 'فایل ها حذف شدند');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'حذف');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'قادر به حذف این اتاق نیست، با یک یا چند رزرو تداخل دارد، ابتدا رزرو های مرتبط را حذف کنید');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'اتاق حذف شد');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'حذف امکانات اتاق');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'قادر به حذف این امکان نیستید، ابتدا اتاق های مرتبط با این امکان را حذف کنید');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'امکان اتاق حذف شد');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'حذف امکانات ملک');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'قادر به حذف این امکان نیستید، ابتدا ملک های مرتبط با این امکان را حذف کنید');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'امکان ملک حذف شد');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'حذف نوع اتاق');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'قادر به حذف این اتاق نیستید، این اتاق به امکانات دیگر متصل استف ابتدا امکانات را حذف کنید');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'قادر به حذف این اتاق نیستید، این اتاق به یک تعرفه متصل است');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'نوع اتاق حذف شد');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'حذف کسب و کار');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'کسب و کار حذف شد');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'شما دسترسی لازم برای حذف این کسب و کار را ندارید');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'عرض تصویر بعد از اعمال تغییرات توسط جومرس');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'نقشه');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'توضیحات');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'زمان های ورود');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'فعالیت های اطراف');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'مسیرهای دسترسی');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'فرودگاه ها');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'انواع دیگر ترنسپورت');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'قوانین و نکات مهم');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'آدرس');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'قابل رزرو به صورت آنلاین می باشد');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'این گزینه را انتخاب کنید اگر می خواهید امکان رزرو آنلاین به بازدید کننده ها بدهید');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'رزرو فقط برای تاریخ های مشخص');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that \"defined arrival day\" isn't set to Yes (unless you specifically want to force people to arrive on a certain day) otherwise you will not get many links in the availability calendar.");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'محدوده زمانی قابل رزرو');
jr_define('_JOMRES_COM_A_BOOKING', 'رزرو ملک');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maximum periods, eg 3x 7 booking periods = 21 days');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'آپارتمان یا کلبه یا ویلا ؟');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'EG you are renting out a business, rather than resources in that business. If this is the case, then you must make sure that you only have the one resource registered against each business.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'بازبینی رزرو');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'تایید رزرو');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'دوشنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'سه شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'چهار شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'پنج شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'جمعه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'یک شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'دو');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'سه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'چهار');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'پنج');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'جمعه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'شنبه');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'یک');
jr_define('_JOMRES_COM_A_AVLCAL', 'تقویم تاریخ های قابل استفاده');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'رنگ فونت برای روزهای فعلی');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'رنگ فونت برای روزهای این ماه');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'رنگ فونت برای روزهای خارج از این ماه');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'رنگ زمینه برای روزهای قابل انتخاب');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'رنگ زمینه برای روزهای خارج از این ماه');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'رنگ زمینه برای روزهای رزرو شده');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'رنگ زمینه برای روزهایی که رزرو شده ولی بیعانه پرداخت نشده');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'رنگ زمینه برای روزهای قبل');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'غیر قابل رزرو');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'آماده رزرو');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'رزرو های موقت');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'روزهای از پیش تعیین شده برای ورود');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'برای مکان هایی که تاریخ های رزرو مشخص دارند، روزهای ورودی را مشخص کنید');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'روزهای مشخص برای ورود');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'مدت اقامت');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'آیا روزهای قابل رزرو نمایش داده شود؟');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'این گزینه را بر روی بله قرار دهید اگر میخواهید روزهای قابل رزرو نمایش داده شود');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'قابل ارائه');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'بر روی یک روز خالی کلیک کنید و فرم رزرو را مشاهده کنید');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'روزهای خارج از سرویس');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'تعریف روزهای جدید برای از سرویس خارج کردن ملک');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'حذف مهمان');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'مهمان حذف شد');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'قادر به حذف این مهمان نیستید، رزرو دیگری برای ان مهمان وجود دارد');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST', ':قیمت واقعی');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'مناسب افراد سیگاری');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'امکان کشیدن سیگار وجود دارد');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'فرمت خروجی تقویم');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC', 'این گزینه امکان تغییر فرمت خروجی تقویم را برای کاربر فراهم میکند');
jr_define('_JOMRES_COM_CALENDARINPUT', 'فرمت ورودی تقویم');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'این گزینه امکان تغییر در فرمت ورودی تقویم را فراهم میکند');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Fixed period bookings allow short breaks');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Length of short break');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'نمایش داده شد');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit trail');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'تاریخ');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME', 'ساعت');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'نام کاربری');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION', 'عملیات');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'جزئیات');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'فیلتر تاریخ');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'فیلتر نام کاربری');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'فیلتر عملیات');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'وضعیت');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'در انتظار ورود');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'ورود امروز');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'ساکن فعلی');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'خروج امروز');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'خروج بعد از تاریخ مقرر');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'وارد نشده');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER', 'کاربر نا مشخص');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'اتاق ایجاد شده');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'اتاق به روز شده');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'اتاق حذف شده');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'امکانات ایجاد شده برای اتاق');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'امکانات به روز شده برای اتاق');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'امکانات حذف شده از اتاق');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'نوع اتاق ایجاد شده');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'نوع اتاق به روز شده');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'نوع اتاق حذف شده');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'کسب و کار ایجاد شده');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'کسب و کار به روز شده');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'کسب و کار حذف شده');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'امکانات ایجاد شده برای ملک');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'امکانات به روز شده برای ملک');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'امکانات حذف شده از ملک');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'تنظیمات ملک');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'ملک منتشر شده');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'تعرفه ایجاد شده');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'تعرفه به روز شده');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF', 'تعرفه حذف شده');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'اضافه کردن هزینه سرویس');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'ورود مهمان');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'خروج مهمان');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'بیعانه');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'ایجاد مهمان');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'به روزرسانی مهمان');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST', 'حذف مهمان');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'رزرو اتاق');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'ایجاد اضافه');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'بروزرسانی اضافه');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'حذف اضافه');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'انتشار اضافه');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'ایجاد زمان مسدود');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'حذف زمان مسدود');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'موارد اضافه');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'توضیحات');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'نام');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'قیمت');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'موارد اضافه به روز شد');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'تغییر این مورد');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'حذف این مورد');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'مدیریت موارد اضافه');
jr_define('_JOMRES_COM_A_EXTRAS', 'آیا موارد اضافه در هنگام رزرو نمایش داده شود؟');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'اگر میخواهید موارد اضافه در هنگام رزرو نمایش داده شود این گزینه را انتخاب کنید');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'موارد اضافه قابل انتخاب');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'تاریخ شروع زمان مسدود');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'تاریخ شروع مجدد فعالیت');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'زمان مسدود');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'مشکل در انجام رزرو، یک یا چند ملک خالی نیست');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'ملک در زمان مسدود قرار دارد');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'نمایش زمان مسدود');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'زمان مسدودی برای نمایش وجود ندارد');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'تعداد ستاره ها');
jr_define('_JOMRES_COM_A_SMOKING', 'نمایش گزینه های مربوط به دخانیات');
jr_define('_JOMRES_COM_A_SMOKING_DESC', 'اگر میخواهید گزینه های مربوط به دخانیات نمایش داده شود این را انتخاب کنید');
jr_define('_JOMRES_COM_A_RESET', 'تنظیم مجدد');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'رزرو لغو شد');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', ':جستجو کنید برای');
jr_define('_JOMRES_COM_A_SMOKING_OPTION', 'گزینه پیش فرض برای دخانیات');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'علامت واحد پول');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Eg &amp;pound; Please note that you should use the HTML entities code for the required symbol. For a list of these entities please visit w3schools');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'کد واحد پول');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC', 'Eg GBP. این کد در ایمیل تایید نهایی که برای مشتری ارسال میشود استفاده میشود');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'توضیحات بیشتر');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'محدود سازی فاصله رزرو تا اقامت');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'اگر میخواهید فاصله زمان رزرو تا امروز را محدود کنید این گزینه را انتخاب کنید، در صورت انتخاب فاصله بیشتر، تاریخ امروز به صورت پیشفرض نمایش داده میشود');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', ':تعداد روزهایی مورد نظر برای محدود کردن رزرو تا اقامت');
jr_define('_JOMRES_COM_A_TAX_WARNING', 'NOTE: بهتر است هر دو این حالت های مالیات را انتخاب نکنید و فقط یکی از آنها که مناسب کسب و کار شما است انتخاب شود');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'مالیات');
jr_define('_JOMRES_COM_A_ROOMTAX', 'مالیات ملک');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC', 'Designed for the American market. These are the resource tax amounts that will be charged to the guest. You can charge a combination and/or of fixed and percentage figures. Note that these taxes are only applied to the cost of the resource.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'بها مالیات مشخص');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'درصد مالیات');
jr_define('_JOMRES_COM_A_EUROTAX', 'مالیات');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'درصد مالیات');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'بایگانی تمام موارد');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', 'بایگانی شد');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'بازرس موارد را بایگانی کرد');
jr_define('_JOMRES_FRONT_TARIFFS', 'تعرفه های ما');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'نام تعرفه');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'توضیح تعرفه');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'نوع اتاق');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'معتبر است از');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'معتبر است تا');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'هر نفر هر شب');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'هر شب');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'بدون در نظر گرفتن آخر هفته');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'حداقل روزها');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'حداکثر روزها');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'حداقل نفرات');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'حداکثر نفرات');
jr_define('_JOMRES_FRONT_PREVIEW', 'پیش نمایش');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'فعال نمودن ویرایش');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT', 'متن فعلی');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT', 'متن جدید');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'متن دلخواه به روز شد');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'ویرایش زبان');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING', 'تعداد موارد بایگانی نشده');
jr_define('_JOMRES_FRONT_PTYPE', 'نوع ملک');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'انواع ملک');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'ویرایش نوع ملک');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'نوع ملک');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'توضیح نوع ملک');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'نوع ملک ذخیره شد');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'حذف این مورد امکانپذیر نیست، به یک یا چند ملک دیگر متصل است');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'نوع ملک حذف شد');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'یادآوری پرداخت');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'سرویس اضافه در فاکتور قید نشود');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'بیعانه');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'بها کل');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'بها کسر شده در زمان رزرو');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'اگر میخواهید فقط بخشی از بها در زمان رزور از مشتری کسر گردد این گزینه را انتخاب کنید');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'ماه های تقویم');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'در قسمت در دسترس بودن ملک چند ماه در تقویم نمایش داده شود');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'امضا از طرف');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'درگاه');
jr_define('_JOMRES_COM_A_CANCEL', 'لغو');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Select the dates that you want to apply the black bookings for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
Choose the room(s) you wish to take out of service. <br>If a resource does not have a check mark against it, it cannot be included in the black booking until any outstanding bookings have been completed/cancelled.<br/>');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'به دلیل عدم فعالیت باید مجددا به سیستم وارد شوید');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'دلیل');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'از درگاه پرداخت استفاده شود؟');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'اگر میخواهید از درگاه پرداخت آنلاین استفاده شود این گزینه را انتخاب کنید');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'لطفا روش پرداخت را انتخاب کنید');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'درگاه فعال باشد؟');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'تنظیمات پلاگین تغییر یافت');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'تنظیمات پلاگین وارد شد');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'نمایش وب سایت این ملک');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'لینک های خارج از سایت');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'آدرس وب سایت خود را اینجا قرار دهید');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'کارت بانکی دیده شده');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'کارت بانکی به روز شده');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'ویرایش کارت بانکی');
jr_define('_JOMRES_COM_A_EDITICON', 'ویرایش اندازه آیکن');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'ارسال تصاویر چند تایی');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'تصویر از قبل در پوشه موجود است');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'اسلاید');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'نمایش لینک به اسلاید؟');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'در توضیحات ملک، اسلاید نمایش داده شود؟');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'عرض نمایه برای اسلاید');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'اسلاید');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />متاسفانه تصویری برای این ملک وجود ندارد، در صورت تمایل برای استفاده از اسلایدها تصویر ارسال کنید');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'نمایش لینک به تعرفه ها؟');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'اجازه نمایش به پاپ آپ داده شود ؟');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC', 'If set to no, then links that normally would have opened in a pop will open inline instead.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'ارسال تصاویر برای اسلاید');
jr_define('_JOMRES_A_TABS_MISC', 'متفرقه');
jr_define('_JOMRES_A', 'تنظیمات سایت');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'امکانات کلی ملک را در نظر بگیر');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC', 'این گزینه را فعال کنید اگر میخواهید امکانات ملکها فقط به صورت پیشفرض توسط مدیر سایت تعیین شوند');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /jomres/uploadedimages/pfeatures/ folder.');
jr_define('_JOMRES_A_ICON', 'آیکن');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'پلاگین جستجو را انتخاب کنید');
jr_define('_JOMRES_FRONT_NORESULTS', 'جستجوی شما نتیجه ای نداشت..لطفا موارد جستجو را تغییر دهید');
jr_define('_JOMRES_AREYOUSURE', 'آیا از انجام این کار اطمینان دارید؟');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'همین حالا رزرو کنید');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'همین حالا رزرو کنید');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV', 'کد ملی');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'تعرفه ها را نمایش بده؟');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'آدرس');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'اطلاعات کامل');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'برای نمایش امکانات و تاریخ های قابل دسترس کلیک کنید');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'نمایش اطلاعات تعرفه');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'اطلاعات آدرس را زیر این لینک نمایش بده');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'توضیحات تکمیلی را زیر این لینک نمایش بده');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'امکانات و در دسترس بودن را زیر این لینک نمایش بده');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'تعرفه ها را زیر این لینک نمایش بده');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'تعرفه های خالص');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'میانگین');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'مدل تعرفه دلخواه خود را انتخاب کنید');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'شما 2 انتخاب برای محاسبه تعرفه دارید، نوع اول تعرفه خالص است که به صورت بها مشخص برای کل روزها محاسبه میشود. نوع دوم تعرفه میانگین است که توسط سایت بر اساس قیمت روزهای مختلف محاسبه میشود');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'گزینه وارد کردن تاریخ خروج نمایش داده شود ؟');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Set this to No if you don't want to show the departure date input box. Only use this if you know what you're doing, as the departure date in bookings will always be set to the day after the arrival date.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Description limit');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'This limits the number of characters shown in the business listing when drawing from the business description.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'فرمت نمایش تاریخ');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Set this to Yes to format output dates according to date() (See Here). Set it to No to use strftime() formatting (see Here eg. %b %d %Y');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'انتشار');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'عدم انتشار');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'از نوع کلی ملک استفاده شود');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC', 'اگر میخواهید نوع ملک فقط توسط مدیر سایت انتخاب شود این گزینه را انتخاب کنید');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'To assign an image to this resource/business type you first need to upload your resource/business type images to the /images/stories/jomres/rmtypes/ folder.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'خطا در رنگ پس زمینه');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'کشور مبدا به صورت پیش فرض');
jr_define('_JOMRES_JAVASCRIPT_', 'مواردی که با ستاره مشخص شده اند الزامی هستند');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'کاربران میتوانند ملک های خود را ثبت کنند');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'این گزینه را فعال کنید اگر میخواهید کاربران بدون دخالت مدیر اقدام به ثبت ملک کنند');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'لطفا کشور و استان ملک مورد نظر را انتخاب کنید');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'لطفا اطلاعات ملک را تکمیل کنید');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'موارد هایلایت شده الزامی هستند');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'ملک ایجاد شد');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED', 'شما قبل از ایجاد ملک باید ثبت نام کنید و یا وارد سیستم شوید');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY', 'ملک ایجاد شده');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'برای کاربر');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'تقویم را از ابتدای سال نمایش بده');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'تاریخ های در دسترس بودن از ابتدای سال نمایش داده میشود');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'تعداد ملکهای در دسترس');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'بازگشت به توضیحات');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'نوع اتاق');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'محدوده جستجو');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'لینک تبدیل واحد پول در تعرفه نمایش داده شود؟');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'نرخ تبدیل');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'به کاربران اجازه ویرایش با نرم افزارهای ویرایش اچ تی ام ال داده شود؟');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'برای رزرو از این فرم استفاده کنید، در پایان اگر اطلاعات وارد شده کافی بود کلید ثبت فعال میشود');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'برای رزرو از این فرم استفاده کنید، در پایان اگر اطلاعات وارد شده کافی بود کلید ثبت فعال میشود');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'رزروهای خاص');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'توضیحات موارد خاص رزرو را مشخص کنید');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'در دسترس بودن');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'ملک مورد نظر خود را انتخاب کنید');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'برای مشاهده در دسترس بودن ملک در تاریخ مورد نظر به اینجا دقت کنید');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'سرویس ها');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'سرویس ها');
jr_define('_JOMRES_COM_PERDAY', 'برای هر شب');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'اطلاعات شما');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'لطفا اطلاعات خود را وارد کنید، مواردی که با ستاره مشخص شده اند الزامی هستند');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'ملک های در دسترس');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'ملک های انتخاب شده');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', ':نزدیکترین زمان ورود ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'برای هر شب');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'اتاق');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'اضافه');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'مالیات');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'تخفیف');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', ':بها کل با حساب مالیات');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'مهمانان');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'اضافه کردن به لیست شما');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'حذف کردن از لیست شما');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'نوع مهمان');
jr_define('_JOMRES_VARIANCES_TYPE', 'نوع');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'نوع مهمان، کودک یا دانش آموز');
jr_define('_JOMRES_VARIANCES_NOTES', 'یادداشت');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'یادداشت در مورد این مهمان');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'حداکثر');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'حداکثر تعدادی که از این نوع مهمان میشود انتخاب کرد');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'درصدی از ');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'The figure calculated is a percentage of the Base figure calculated for the resource. If this is set to no then the figure you specify is simply added or subtracted from the base resource value.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'آیا واریانس اضافه شود؟');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'The figure calculated is added to or removed from the Base figure calculated for the resource. Set this to No if you want this to be a discount from the base figure.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'واریانس');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'مقدار واریانس');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'اصلاح ترتیب نمایش نوع مشتری');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'نوع مشتری منتشر شده');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'نوع مشتری حذف شده');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'نوع مشتری ایجاد شده');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'نوع مشتری به روز شده');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'نوع مشتری به روز شده');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'آیا لینک به لیست ملکها نمایش داده شود؟');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'آیا تقویم نمایش داده شود؟');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Switch this to Yes to disable display of the business header and details, so that only the availability calendar is viewable in the business details section. Only really intended for users renting out single resource businesses (eg apartments, cottages etc).');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'حداقل فاصله بین روز ورود و روز خروج');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'حداقل فاصله بین روز ورود و روز خروج در فرم رزرو');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'در فرم رزرو شماره اتاق را نشان بده');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'در فرم رزرم نام اتاق را نشان بده');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'در فرم رزرو تعرفه را نشان بده');
jr_define('_JOMRES_ORDER', 'سفارش');
jr_define('_JOMRES_REQUIREDFIELDS', 'الزامی');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'روزهای باقی مانده تا ورود');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'حداقل روزهای مورد نیاز از امروز تا روز ورود');
jr_define('_JOMRES_DTV', 'انواع روزها');
jr_define('_JOMRES_DTV_DOW', 'روز هفته');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'مهمان نوع پیش فرض');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Default number of  the first Guest type shown in the booking form.. If you use guest types, then this is the default number that the first guest type in the booking form will be set to.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'فقط کاربران ثبت نام کرده اجازه رزرو دارند');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'برای رزرو باید در سایت ثبت نام کنید. برای ثبت نام اینجا کلیک کنید');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'رنگ فونت برای لینکها به رزرو فعلی');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'حاشیه تعطیلات آخر هفته');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'رزرو انجام شد');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'زمان مسدود');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'رند کردن بها بیعانه');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'بیعانه دریافت شود');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'تعرفه ها به صورت هفتگی باشد');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'شما میتوانید تعرفه را به صورت روزانه و هفتگی محاسبه کنید، در صورتی که میخواهید هفتگی محاسبه شود این گزینه را انتخاب کنید');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'برای هر هفته');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'محدوده مشخص برای روزهای ورود');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'When fixed arrival dates are selected, the number dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'اطلاعاتی برای امکان استعمال دخانیات وجود ندارد');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'روز ورود صحیح نیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'روز خروج صحیح نیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'مدت اقامت بسیار کوتاه است، لطفا حداقل این مقدار را انتخاب کنید');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'مدت اقامت شما عبارت است از');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'نوع مهمان اشتباه است');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'نوع و تعداد مهمانان را انتخاب کنید');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'تعداد مهمانان از تعرفه مورد نظر بیشتر است');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'تعداد اتاق ها از مهمانان بیشتر است، برای حذف بر روی اتاق مورد نظر کلیک کنید');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'تعداد مهمانان بیشتر از تخت های موجود است');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'شما باید اتاق های بیشتری انتخاب کنید');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'انتخاب اتاق');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'وارد کردن نام الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'وارد کردن نام خانوادگی الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'وارد کردن پلاک الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'وارد کردن نام خیابان الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'وارد کردن شهر الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'وارد کردن استان الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'وارد کردن کد پستی الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'وارد کردن کشور الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'شماره تلفن ثابت الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'شماره موبایل الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'پست الکترونیکی الزامیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'پست الکترونیکی معتبر نیست');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'میزبان پست الکترونیک شما نا مشخص است');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'جای خالی داریم!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'هیچ اتاقی انتخاب نشده');
jr_define('_JOMRES_BOOKING_NUMBER', 'شماره رزرو');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'پس زمینه');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'پاک کردن مقادیر موقت');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'درصد افزایش قیمت یکنفره');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'اگر نرخ یکنفره به صورت درصدی افزایش پیدا میکند این گزینه را بله انتخاب کنید');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'محدوده تعرفه برای اتاق مورد نظر');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Use this input to limit the number of available resources & tariffs that are listed in the booking form. Set it to zero if you do not want limiting enabled.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'در این زمان جای خالی وجود ندارد :|');
jr_define('_JOMRES_BOOKITNOW', 'همین حالا رزرو کنید');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Global editing mode?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL businesses in the system for the constant you are editing.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'واحد پول مشترک');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'اگر میخواهید تمامی کاربران از واحد پول مشترک استفاده کنند این گزینه را انتخاب کنید.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'نوع واحد پول مشترک');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Component wrapped');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'ابر مدیر کسب و کار');
jr_define('_JOMRES_COM_WEEKENDONLY', 'فقط آخر هفته ها');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'روزهای آخر هفته');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the resources list.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'قبل از ورود اطلاعات کشور خود را انتخاب کنید');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'قبل از ارسال تصویر تغییرات را ذخیره کنید');
jr_define('_JOMRES_TARIFFSFROM', 'لیست قیمت');
jr_define('_JOMRES_SEARCH_ALL', 'همه');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'کشور');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'استان');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'شهر');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'امکانات');
jr_define('_JOMRES_SEARCH_BUTTON', 'جستجو');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'جستجوی توضیحات');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'جستجوی کلمات');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'لطفا روزهای مورد نظر خود را وارد کنید تا جستجوی مکان مورد نظر شما شروع شود');
jr_define('_JOMRES_SEARCH_PTYPES', 'نوع');
jr_define('_JOMRES_SEARCH_RTYPES', 'نوع اتاق');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'پیش فرض');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'نوع ملک');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'منطقه ملک');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'شهر ملک');
jr_define('_JOMRES_SORTORDER_STARS', 'ستاره');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST', 'لیست ملکها');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'توضیحات');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'فرم رزرو');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'اطلاعات آدرس خود را تکمیل کنید');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'بررسی مجدد در دسترس بودن ملک<br/>(Resource selection will be reset)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'بررسی مجدد در دسترس بودن ملک');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'تغییر در امکانات اضافه');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'تغییر در انتخاب ملک');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'بروزرسانی اطلاعات ملک');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'متاسفانه یک یا چند قسمت آدرس اشتباه است');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'عکس');
jr_define('_JOMRES_CURRENCYFORMAT', 'واحد پول');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES', "Show Managers's options as images");
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'تنظیمات جستجو');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'گزارش ها');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES', 'هیچ رکوردی برای نمایش وجود ندارد');
jr_define('JOMRES_COM_A_MESSAGE', 'پیغام');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'عادی');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'پیشرفته');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define('JOMRES_COM_A_TARIFFMODE', 'تغییرات تعرفه');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "Warning: Switching between different tariff types may result in loss of data. See the note below regarding this.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each resource/business type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference resources and tariffs to resource/business types and allows you to configure resources and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a resource and associate it with a resource type. You then create a tariff and associate THAT with a resource type. Using this method it is possible to \"layer\" tariffs over each other, for example a resource type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a resource or tariff from a resource/business type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of resources and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'لیست ملکها در اطلاعات نمایش داده شود؟');
jr_define('JOMRES_PROPERTYTYPE', 'نوع ملک');
jr_define('JOMRES_COM_A_SRPONLY', 'فقط اجاره به صورت کلی');
jr_define('JOMRES_MAXPEOPLEINROOM', 'حداکثر مهمانان برای یک ملک');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'حداکثر مهمانان برای یک رزرو');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'ایجاد یادداشت جدید');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'ویرایش یادداشت');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'حذف یادداشت');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'نمایش یادداشت ها');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'یادداشت جدید');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'یادداشت ویرایش شده');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'یادداشت حذف شده');
jr_define('_JOMCOMP_MYUSER_MENUTITLE', 'امکانات من');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'لیست رزروهای من');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'رزروهای من');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'نمایش رزرو');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'نمایش علاقمندی ها');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'لیست علاقمندی شما خالیست');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'اضافه به لیست علاقمندی');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'نوع ملک');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'Businesses on site');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'قیمت ویژه');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'فعال');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'این پلاگین به شما امکان تایین قیمت به صورت داینامیک را میدهد');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'شما میتوانید این امکان را فراهم کنید که قیمت ها به صورت اتوماتیک بر اساس زمان رزرو یا مقدار باقی مانده از آن ملک یا موارد دیگر شامل تخفیفاتی شوند');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'روزهای باقی مانده تا روز ورود از امروز');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'اگر 10 درصد یا کمتر از این ملک باقی مانده');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'اگر 25 درصد یا کمتر از این ملک باقی مانده');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'اگر 50 درصد یا کمتر از این ملک باقی مانده');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'اگر 75 درصد یا کمتر از این ملک باقی مانده');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'درصد تخفیف');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'قبل از تخفیف');
jr_define('_JOMCOMP_WISEPRICE_TO', 'به');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'تخفیفی محاسبه نشده');
jr_define('JOMRES_COM_A_MAPSKEY', 'کد نقشه گوگل');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('JOMRES_COM_A_USE_SSL', 'از پروتکل اس اس ال در فرم رزرو استفاده شود؟');
jr_define('JOMRES_COM_A_USE_SSL_DESC', 'باید مطمئن شوید که گواهی اس اس ال شما معتبر است');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'لحظه آخر');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'فعال؟');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'اگر میخواهید پیشنهاد های لحظه آخر را فعال کنید این گزینه را انتخاب کنید');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'فرجه');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'تخفیف');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'با درصد');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'این ملک شامل تخفیف است');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'هزینه اقامت کاهش یافت');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', '');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'درصد تخفیف اگر تا این تاریخ رزرو کنید');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '.برای استفاده از حداکثر تخفیف همین حالا رزرو کنید');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', 'ممکن است شامل درصد بیشتری از تخفیف شود اگر روز ورود قبل از تاریخ');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'تعرفه با توضیحات بیشتر');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'اگر میخواهید توضیحات بیشتر در مورد تعرفه نمایش داده شود این گزینه را انتخاب کنید');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'تنظیمات را خلاصه کن');
jr_define('_JOMCOMP_AMEND', 'اصلاح رزرو');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'انتخاب ملک دیگر');
jr_define('_JOMCOMP_AMEND_HEADER', 'قرارداد اصلی');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'بیعانه پرداخت شده');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'بیعانه پرداخت نشده');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'بها باقی مانده');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'بیعانه باقی مانده');
jr_define('_JRPORTAL_CANCEL', 'لفو');
jr_define('_JRPORTAL_CPANEL', 'منوی کنترل جومرس');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'حق کمیسیون به صورت پیش فرض');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Choose the default commission rate that will be applied to a business in the event that another commission rate is not otherwise set.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'لیست کمیسیون ها');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'بها کمیسیون');
jr_define('_JRPORTAL_CRATE_TITLE', 'عنوان');
jr_define('_JRPORTAL_CRATE_TYPE', 'نوع');
jr_define('_JRPORTAL_CRATE_VALUE', 'بها کمیسیون');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'کد واحد پول');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'لیست ملکها');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'نام ملک');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'آدرس ملک');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'ملکهایی که با رنگ قرمز مشخص شده اند هنوز حق کمیسیون پرداخت نکرده اند');
jr_define('_JRPORTAL_STATS_PATETITLE', 'اطلاعات آماری');
jr_define('_JRPORTAL_STATS_STATTYPE', 'اطلاعات آماری برای');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'تعداد کلیک');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'مشاهده ملک');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'تعداد رزروها');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'بهای کل رزروها');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'تخمین بهای کمیسیون');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'نرخ کمیسیون');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'لیست رزروها');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'کد ملک');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'کد مهمان');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'کد واسطه');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'کد فاکتور');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'کل رزرو');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'کد قرارداد');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'شماره قرارداد');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'کد ملک پو.ل');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'ایجاد شده');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'بایگانی شده');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'بایگانی شده در تاریخ');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'اضافه کردن به فاکتور');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'مدیریت فاکتور');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'ملک مورد نظر');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'مقدار');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'مشخصات');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', 'به فاکتور اضافه شد');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', 'نمایش سفارش ها');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', 'به فاکتور اضافه نشد');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', 'خطا، شما مقدار را مشخص نکردید');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have business type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this business type so resources become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'شما نمی توانید این ملک را حذف کنید چون تنها ملکیست که به آن دسترسی دارید، اما میتوانید از نوار ابزارها گزینه عدم نمایش را انتخاب کنید');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'If this is a demo installation and you intend to upgrade to Jomres Solo (one business only limit) then you should create a new business first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase.');
jr_define('_JOMRES_COM_EMAILERRORS', 'لیست خطاها به ایمیل ارسال شود؟');
jr_define('_JOMRES_COM_EMAILERRORS_DESC', "Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'.");
jr_define('_JOMRES_COM_ISTHISANMRP', 'آیا این ملک یک هتل/اقامت گاه/اتاق است؟');
jr_define('_JOMRES_COM_ISTHISANMRP_DESC', 'Configuration options differ depending on if you are renting out resources in a business, or the business itself. Select MRP if you are offering resources, select SRP if you are offering the entire business.');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK', 'Use Jomres email address checker?');
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC', 'Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors.');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'بهای ملک');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'شب');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'برای هر ملک');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'بهای کل سرویس به همراه مالیات');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'کل مبلغ قابل پرداخت');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'لطفا قبل از موافقت بخوانید');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'خلاصه رزرو شما نمایش داده شده است، اگر میخواهید میتوانید آن را تغییر دهید');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'اگر می خواهید در موارد فوق تغییری ایجاد کنید اینجا کلیک کنید');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'اصلاح رزرو');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'لطفا اگر درخواستی دارید اینجا بنویسید');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'صحت موارد فوق مورد تایید است');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'هر نفر هر شب');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE', 'فایل زبان پیش فرض');
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
jr_define('_PN_OF', 'از');
jr_define('_PN_START', 'شروع');
jr_define('_PN_PREVIOUS', 'قبلی');
jr_define('_PN_NEXT', 'بعدی');
jr_define('_PN_END', 'پایان');
jr_define('_PN_RESULTS', 'نتایج');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'متن پیام برای ارسال را وارد کنید');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'تماس با هتل');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'فرم تماس');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'با تشکر از شما برای ارسال این پیام، پیام مورد نظر برای هتل و همچنین برای آدرس ایمیل شما ارسال شد. لطفا منتظر دریافت پاسخ از سوی هتل باشید');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'در مورد');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'کاراکترهای شکل را اینجا وارد کنید');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'نمی توانم کاراکترها را تشخیص دهم...');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'ارسال');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'شکل  جدید');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'پرسش');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'لطفا ملک مورد نظر خود را از لیست زیر انتخاب کنید');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'حداقل ملکها انتخاب شده اند');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of resources already selected in booking before tariff/resource type combo can be offered. Allows you to have discounted tariffs when more than N resources are already selected.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'حداکثر ملکها انتخاب شده اند');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of resources already selected in booking before tariff/resource combo is no longer offered. Allows you to stop offering this resource type/tariff combination once N resources have been selected in the booking form.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person supplements set here will not be used if Single Person Supplements are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'در دسترس');
jr_define('_JOMRES_AVLCAL_QUARTER', 'تعدادی رزرو شده');
jr_define('_JOMRES_AVLCAL_HALF', 'نیمی از ملکها رزرو شده');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'تعداد کمی باقی مانده');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'کلا رزرو شده');
jr_define('_JOMRES_COM_SEF_URL_PREFIX', 'Url prefix');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC', "This is the first item displayed after the domain - Change to what you require - If you don't want to use it then blank it out");
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'View business task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'dobooking task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Search task alias');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Add country to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Add region to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Add town to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Add business type to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Add business name to url');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Append business id to business name');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'if business name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Search URL Structure - Add country to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Search URL Structure - Default country');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'If all your businesses are in one country then you will not have country in the search - enter a default country here if you want to display a country');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Search URL Structure - Add region to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION', 'Search URL Structure - Default region');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'If all your businesses are in one region then you will not have region in the search - enter a default region here if you want to display a region');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Search URL Structure - Add town to url');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN', 'Search URL Structure - Default town');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Search URL Structure - Business type');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Search URL Structure - Default business type');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Used in url if search is for all business types');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetect Javascript calendar language');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'برای هفته');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'برای روز');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'برای رزرو');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'برای هر نفر در هر رزرو');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'برای هر نفر در هر روز');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'برای هر نفر در هر هفته');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'برای هر روز');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'برای هر روز  مل X ک انتخاب شده');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'بها');
jr_define('JOMRES_WORD_SAVING', 'در حال ذخیره...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Use Composite Business details?');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 introduces the composite business details where all of the business details output is sent to one template file (composite_business_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS', "This is a list of all users on the system. Non-business managers will have a Guest icon, business managers will have Reception/Business Manager/Super business manager icons.<br/>When Jomres is first installed \"admin\" is automatically added as a business manager and is considered an authorised user.<br/>Non-super business managers must be assigned to at least one business otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to businesses or give them super business manager rights.<br/>To authorise a user, click on the red Cross next to their name. To deauthorise them, click the green Tick.<br/>To assign users to specific businesses only, or give them super business manager rights, authorise them then click the edit icon (which is only visible once they've been authorised). Users who've registered their business(s) themselves will be automatically assigned to those businesses. Super business managers automatically have rights over all businesses, and will see all configuration options even if the minimised configuration option is set in Site Config.");
jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS', "Here you can assign a manager to certain businesses. Ensure, if they're not going to be a super business manager, that they have rights to at least one business otherwise they will see an error when they log in. To give a receptionist/business manager rights over only certain businesses, ensure that the Super Business Manager dropdown is not set to Yes.");
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'شما هنوز رزروی انجام نداده اید');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'نوع');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'اصلاح نوع');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'انتخاب نوع');
jr_define('_JOMRES_COM_LOGGING', 'Jomres logging');
jr_define('_JOMRES_COM_LOGGING_WARNING', 'These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
jr_define('_JOMRES_COM_LOGGING_BOOKING', 'Booking form logging (Booking engine logs)');
jr_define('_JOMRES_COM_LOGGING_GATEWAY', 'Gateway logs (eg paypal etc)');
jr_define('_JOMRES_COM_LOGGING_REQUEST', 'Request log (all incoming server requests)');
jr_define('_JOMRES_COM_LOGGING_SYSTEM', 'متفرقه');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portal (mainly for recording commission etc)');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'درخواست شما...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'نمایش آیکن نوع اتاق در فرم رزرو');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'تعداد ملکها در لیست');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'تعداد ملکهای نمایش داده شده در نتیجه جستجو');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'قابلیت جستجوی پیشرفته');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "The Jomres integrated search feature allows your users to search through Jomres businesses according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don't want to use Joomla search modules, or for other CMS users who's CMS doesn't have it's own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn't very pretty. That's because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit srch.html in the folder JOMRES_TEMPLATEPATH_FRONTEND");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'آیا این قابلیت فعای شود؟');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'اگر این گزینه را انتخاب کنید، قابلیت جستجوی پیشرفته در تمامی لیست های جومرس فعال خواهد شد');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'نمایش ستونی');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'جستجو به صورت ستونی نمایش داده خواهد شد (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', 'Feature columns');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', 'The number of feature icons that can be shown before a br is inserted to go to next row.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Property name');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Show the Property name input.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Town/region');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Show the Region input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Search by business type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by business type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Search by resource type');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by resource type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Show as dropdown?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Search by description');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Search by availability');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Search by price ranges');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a business is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1&secret='.base64_encode(get_showtime('secret')).'> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Template Editing');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC', 'This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Template Name');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Template has been customised?');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Default value');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Description');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Required');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximum Quantity');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
jr_define('_JRPORTAL_INVOICES_ISSUE', 'دریافت فاکتور');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'نرخ مالیات');
jr_define('_JRPORTAL_TAXRATES_CODE', 'کد مالیات');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'توضیح نرخ');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'شما نمیتوانید این نرخ را حذف کنید');
jr_define('_JRPORTAL_TAXRATES_RATE', 'نرخ');
jr_define('_JRPORTAL_INVOICES_TITLE', 'فاکتورها');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'پرداخت نشده');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'پرداخت شده');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'لغو شده');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'در انتظار');
jr_define('_JRPORTAL_INVOICES_USER', 'کاربر');
jr_define('_JRPORTAL_INVOICES_STATUS', 'وضعیت');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Due');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'عضویت');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Outstanding total');
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL', 'Recurring total');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'واحد پول');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'ردیف');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'نام');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'توضیحات');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'قیمت اولیه');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'تعداد اولیه');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'تخفیف');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'مبلغ کل');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', 'Recurring Price');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', 'Recurring quantity');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', 'Recurring discount');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', 'Recurring total');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'کد مالیات');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', '');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'نرخ مالیات');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', 'paypal تنظیمات');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', 'کد واحد پول');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', 'Use sandbox?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', 'Your paypal email address');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', 'Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;'.JOMRES_SITEPAGE_URL_AJAX.'&task=completebk');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', 'If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'نمایش صورت حساب های من');
jr_define('_JRPORTAL_COUPONS_TITLE', 'کوپن تخفیف');
jr_define('_JRPORTAL_COUPONS_DESC', 'Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.');
jr_define('_JRPORTAL_COUPONS_CODE', 'کد کوپن');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'اعتبار از تاریخ');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'اعتبار تا تاریخ');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'میزان تخفیف');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'میزان تخفیف به درصد');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'فقط برای اتاق');
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC', 'تخفیف فقط برای اتاق محاسبه میشود، اگر نه برای کل بها رزرو محاسبه میشود');
jr_define('_JRPORTAL_COUPONS_SQLERROR', 'خطا در پایگاه داده هنگام اضافه یا حذف کوپن');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'اگر کوپن تخفیف دارید آنرا وارد کنید و گزینه ذخیره کوپن را انتخاب کنید');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'ذخیره کوپن');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'کوپن برای رزرو شما ذخیره شد');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'این کد وجود ندارد');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'مبلغ تخفیف');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'تخفیف محاسبه شده، کد کوپن/میزان تخفیف');
jr_define('_JOMRES_COM_CACHING', 'Use the Jomres caching feature?');
jr_define('_JOMRES_COM_CACHING_DESC', 'Set this to No to disable the Jomres caching feature.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'زبان را انتخاب کنید');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'امکانات مورد نظر برای نمایش در منوی زبان را مشخص کنید');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'منوی زبان نمایش داده شود؟');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Booked out and Cancelled bookings');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'گرامی');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'از ثبت نام شما متشکریم');
jr_define('_JRPORTAL_NEWUSER_USERNAME', ':نام کاربری شما');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', ':کلمه عبور شما');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'برای مشاهده و رزرو وارد شوید');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'کوپن ذخیره شد');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'کوپن حذف شد');
jr_define('_JOMRES_COM_GROWL', 'Use Jomres messaging');
jr_define('_JOMRES_COM_GROWL_DESC', 'Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'سیستم ارسال پیامک clickatell');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'نام کاربری');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'کلمه عبور');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Notification mobile number');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
Step 1 - register for a Clickatell account<br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
Step 2 - add a registered API connection (sub-product)<br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to " .get_showtime('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'نمایش امکان دسترسی معلولین در فرم رزرو');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'نمایش حداکثر مهمانان در فرم رزرو');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'توجه داشته باشید که قیمت نهایی فقط بعد از اضافه کردن به لیست نمایش داده میشود');
jr_define('_JOMRES_LASTEDITED_DB', 'Database template Last edited');
jr_define('_JOMRES_LASTEDITED_DISK', 'Disk template Last edited');
jr_define('_JOMRES_LASTEDITED_WARNINGICON', 'Database template warning');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Database template may be out of date');
jr_define('_JOMRES_LASTEDITED_WARNING', 'If there is an icon against a template, then Jomres has detected that the template stored in the database may be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
jr_define('_JOMRES_COM_NEWUSER', 'Create new user on booking');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Create new user account on unregistered user booking. (Joomla only)');
jr_define('_JOMRES_CLICKTOREGISTER', 'برای ثبت ملک خود اینجا کلیک کنید');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', ':از رزرو شما متشکریم، اطلاعات کاربر جدید');
jr_define('_JOMRES_LATLONG_DESC', 'محل دقیق ملک خود را به وسیله نشانگر در نقشه مشخص کنید');
jr_define('_JOMRES_CONTROLPANEL', 'پنل کنترل');
jr_define('_JOMRES_COM_FAUXHEADERS', 'Output Jomres javascript headers into the body of the html?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC', "Set this to Yes if you are having problems with mootools and Jomres's jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn't valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.");
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'نمایش فاکتور');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'نمایش فاکتورها');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'ملک من را به این سایت اضافه کن');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', ':توجه');
jr_define('_JOMRES_COM_YOURBUSINESS', 'اطلاعات کسب و کار شما');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'نام');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'شماره اقتصادی');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'پلاک');
jr_define('_JOMRES_COM_A_TAX_WARNING2', 'NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.');
jr_define('_JOMRES_INVOICE_NUMBER', 'شماره فاکتور');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the business has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Sorry, you cannot black book this business for those dates.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'You can blackbook this business for those dates.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'ملک شما به صورت هر نفر هر شب تنظیم شده است اما شما نوع مهمان را تعریف نکرده اید، لطفا ابتدا نوع مهمان را تعریف کنید');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'شما تعرفه ای برای ملک خود مشخص نکرده اید، رزرو بدون تعرفه امکان پذیر نیست');
jr_define('_JOMRES_EDITINGMODE_ON', 'حالت ویرایش فعال');
jr_define('_JOMRES_EDITINGMODE_OFF', 'حالت ویرایش غیر فعال');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'آیا میخواهید مبلغ بیعانه به صورت متغیر محاسبه شود؟');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'گزینه بیعانه متغیر به این صورت است که شما به عنوان مثال تایین میکنید که اگر فاصله رزرو تا اقامت از تعداد مشخصی روز کمتر باشد ودیعه به صورت کل مبلغ فاکتور دریافت خواهد شد');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'تعداد فاصله روزها برای دریافت کل مبلغ به جای ودیعه');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN', 'Send Contact Owner emails to Alternative address?');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the business configuration area.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative address for Contact Owner emails.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'ایمیل تایید ارسال شد. شما میتوانید این پنجره را ببندید');
jr_define('_JOMRES_REALESTATE_TITLE', 'Real estate listing');
jr_define('_JOMRES_REALESTATE_YESNO', 'Is this business a for sale listing?');
jr_define('_JOMRES_REALESTATE_YESNO_DESC', 'Select Yes if you are selling the business, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'فاکتور به پرداخت شده تغییر کند');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'فاکتور به پرداخت شده تغییر کرده');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE', 'آیا برای ترجمه از گوگل استفاده شود؟');
jr_define('_JOMRES_AUTOTRANSLATE_DESC', "This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google's translation tool to automatically set up translations for a given business. Note that this feature sanitizes all input, so if you use a html editor for formatting your business details, then this will break that formatting.<br/>");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single business installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of businesses, just takes the guest to the booking form for the first business in the system. Business managers also will not see see the Business Details preview button or the Add new business button. Ideal if you only want to list one business and take bookings for it.<br/>');
jr_define('_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?');
jr_define('_JOMRES_HTMP_PURIFIER_DESC', 'Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Balance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', "Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don't you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see the editing mode manual page for more information on this subject.");
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'آیا ثبت ملکها به یک کشور محدود شود؟');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that business registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', ':ملکها در این کشور هستند');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the business details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'متاسفانه این ملک در حال حاضر در دسترس نیست');
jr_define('_JOMRES_REVIEWS', 'نظرات');
jr_define('_JOMRES_REVIEWS_TITLE', 'عنوان نظر');
jr_define('_JOMRES_REVIEWS_DATE', 'تاریخ ارسال');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'هنوز نظری برای این ملک ثبت نشده');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'آیا میخواهید اولین نفری باشید که در این مورد نظر میدهید؟');
jr_define('_JOMRES_REVIEWS_IAGREE', 'من با این نظر موافقم');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'من با این نظر مخالفم');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', ':میانگین امتیاز');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', ':کل آرا');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'ثبت نظر جدید');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'شما باید برای نظر دادن ابتدا به سایت وارد شوید');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', ':لطفا نظر خود در مورد این ملک را به بگویید');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', ':این نظردهنده گفته است');
jr_define('_JOMRES_REVIEWS_PROS', ':نکات مثبت');
jr_define('_JOMRES_REVIEWS_CONS', ':نکات منفی');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', ':تاریخ ثبت نظر');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'شما یک بار در این مورد نظر داده اید، متاسفانه نمیتوانید دوباره نظر دهید');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'متاسفانه شما اجازه ارسال نظر را ندارید');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'نمایش نظرات');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'مهمانان با این نظر موافق بودند');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'مهمانان با این نظر مخالف بودند');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'مهمانان با این نظر موافق بودند');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'مهمانان با این نظر مخالف بودند.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'از اینکه در این مورد نظر دادید از شما متشکریم');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'شما یک بار در این مورد نظر داده اید، متاسفانه نمیتوانید دوباره نظر دهید');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'مطمئن شوید که تمامی موارد را پر کرده اید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'لطفا خلاصه نظر خود را بار عنوان بنویسید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'لطفا در این قسمت نظر خود را به صورت کاملتر بنویسید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'نکات مثبت اقامت خود را بنویسید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'لطفا نکات منفی اقامت خود را بنویسید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'لطفا به رفتار پرسنل امتیاز دهید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'لطفا به مکان جغرافیایی این ملک امتیاز دهید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'نظر خود را در مورد پاکیزگی این مکان بیان کنید');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'آیا در این ملک اقامت راحت و با آرامشی داشتید؟');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'به نظر شما کیفیت اقامت با هزینه آن تناسب داشت؟');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'از خدمات راضی بودید؟');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'خلاصه نظر شما');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'تجربه شما با جزئیات بیشتر');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'از اینکه نظر خود را ثبت کردید متشکریم');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'از اینکه نظر خود را ثبت کردید متشکریم، نظر شما پس از بررسی منتشر میشود');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'آیا از سیستم نظرات جومرس استفاده شود؟');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'آیا نظرات بدون بررسی منتشر شوند؟');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'اگر این را خیر قرار دهید نظرات برای انتشار نیاز به تایید خواهند داشت');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'نظرات به حالت آزمایشی تغییر کنند؟');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'در حالت معمولی مالکان و مدیران نمیتوانند نظر دهند ولی در حالت آزمایشی میتوانند');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'این لیست کل ملکها میباشد، برای مشاهده/حذف/انتشار نظرات بر روی ملک مورد نظر کلیک کنید');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'تعداد نظرات منتشر نشده');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'تعداد کل نظرات');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'انتشار/عدم انتشار نظر');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'حذف نظر');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'گزارش نظر');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'گزارشات نظر');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'لطفا گزارش خود را بنویسید');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'آیا تخلفی در این نظر مشاهده میکنید؟ لطفا آنرا برایی بررسی گزارش کنید');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'ثبت');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'گزارش تنظیم شده توسط');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'گزارشات توسط کاربرانی تهیه میگردند مخالف این نظر هستند..تنها راه حذف گزارش، حذف نظر به طور کامل است');
jr_define('_JOMRES_REVIEWS_RATING', 'امتیازدهی از 1=ضعیف تا 10=خیلی عالی');
jr_define('_JOMRES_REVIEWS_RATING_1', 'مهمان نوازی');
jr_define('_JOMRES_REVIEWS_RATING_2', 'مکان');
jr_define('_JOMRES_REVIEWS_RATING_3', 'پاکیزگی');
jr_define('_JOMRES_REVIEWS_RATING_4', 'وسایل');
jr_define('_JOMRES_REVIEWS_RATING_5', 'ارزش نسبت به کیفیت');
jr_define('_JOMRES_REVIEWS_RATING_6', 'خدمات');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', ':نظردهنده');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'نظرات را مخفی کن');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'فرم رزرو را در قسمت مشخصات این ملک نشان بده؟');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the business details page. If you set it to No, then a link will appear in the business details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Prices are gross?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'If the prices you enter into the system include tax, then select Yes. If they are not (i.e. Nett), select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', ':مالیات بر خدمات');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'گزینه روزهای هفته این امکان را به شما میدهد که برای آنروز یک نرخ تعیین کنید و پس از کلیک کردن، آن نرخ برای روزهای مشخص شده محاسبه میشود');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'گزینه انتخاب تاریخ و نرخ این امکان را به شما میدهد که نرخ مورد نظر را برای بازه ای از روزها مشخص کنید، فقط کافیست روز شروع و پایان را انتخاب کنید');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'روز شروع');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'روز پایان');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'نرخ');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'ثبت نرخ ها');
jr_define('_JOMRES_PARTNERS_TITLE', 'همکاران');
jr_define('_JOMRES_CALENDAR_TODAY', 'امروز');
jr_define('_JOMRES_CALENDAR_PREV', 'قبلی');
jr_define('_JOMRES_CALENDAR_NEXT', 'بعدی');
jr_define('_JOMRES_CALENDAR_RTL', 'اشتباه');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'اتاق');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'مهمان ها');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'اتاق ها به این صورت برای مهمانان در نظر گرفته شده است، اگر میخواهید تغییر دهید لطفا با هتل تماس بگیرید، این تغییر ممکن است شامل هزینه باشد');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'در نظر داشته باشید که ملک شما منتشر نشده است و فقط شما قادر با دیدن آن هستید');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'ترتیب پیش فرض برای نتایج جستجو');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'برای تغییر ترتیب پیش فرض این گزینه را تغییر دهید');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'منوی تغییر ترتیب را نمایش بده');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'روش نمایش لیست ملکها');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" resources list style you offer individual resources to guests. With the resource type view, guests choose the number of resources of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'نوع اتاق');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', 'چک کردن در دسترس بودن');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'بازسازی لیست ملک ها');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'محاسبه کل');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'بروزرسانی فرم انجام شد');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'شروع هفته در تقویم');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'فقط مهمانانی که اقامت داشته اند میتوانند نظر بدهند');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this business.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'برای هر اتاق');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', ':تعداد مهمانان برای هر اتاق');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', ':تعداد مهمانان برای هر رزرو');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'تعداد اتاق ها');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'تعرفه پیش فرض');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', 'تعرفه جدید');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW', 'انتخاب سال برای نمایش');
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a micromanage tariff');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'ژانویه');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'فوریه');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'مارس');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'آوریل');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'مه');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'ژوئن');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'ژوئیه');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'اوت');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'سپتامبر');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'اکتبر');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'نوامبر');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'دسامبر');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS', 'فرآیند مدیریت کسب و کار');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', 'بر اساس نوع لیستینگ مورد نظر شما، فرآیندهای مدیریتی مختلفی وجود دارند');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', 'اجاره');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', 'گزینه اجاره را انتخاب کنید، اگر میخواهید یک اتاق در یک مجموعه(ملک) مثل هتل یا آپارتمان را در لیست قرار دهید');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', 'آژانس مسکن');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', 'گزینه آژانس مسکن را انتخاب کنید اگر ملک مورد نظر شما فقط برای فروش است ');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to business managers in the General Configuration section. This is useful if you do not want business managers to play around with too many settings, instead you can edit jomres_config.php to define default business options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'گزینه مورد نظر خود را انتخاب کنید');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', 'Switches on html editors in business details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'نمایش تمام صفحه');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'نمایش عادی');
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER', 'آیا تغییر ساعت محلی برای مدیر ملک فعال باشد؟');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'تخفیف همکار');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'جستجوی کاربران');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign businesses and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'همکاران فعلی');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'یک همکار را برای بردن به صفحه مدیریت انتخاب کنید');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', ':همکار');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'جستجوی ملک');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the business name and select a business.<br/> When you select the business you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'ملک های فعلی');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'برای تغییر تنظیمات تخفیف همکار، روی ملک مورد نظر کلیک کنید');
jr_define('_JOMRES_SUSPENSIONS_TITLE', 'برای تعلیق یک مدیر کلیک کنید، تعلیق کردن به صورت خودکار همه ملکهای مربوط به آن مدیر را به صورت تعلیق در میاورد');
jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO', 'Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform business management functions and all of their businesses will be unpublished. Super business managers cannot be suspended.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'این حساب کاربری تعلیق شده است و شما نمیتوانید ملکهای خود را مدیریت کنید');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'حساب مدیر تعلیق شد');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'حساب مدیر از حالت تعلیق خارج شد');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'در نظر داشته باشید که حساب شما تعلیق شده است، تا رفع تعلیق شما نمی توانید فعالیتی داشته باشید');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'در نظر داشته باشید که حساب شما مجددا فعال شده است، شما میتوانید برای ادامه فعالیت به حساب کاربری خود وارد شوید');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'حذف از علاقه مندی');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'اطلاعات رزرو بایگانی شد');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'ویرایش حساب کاربری');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE', 'جستجوی کاربران');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign businesses and access rights to the user.');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'مدیران فعلی');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS', 'یک همکار را برای بردن به صفحه مدیریت انتخاب کنید');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'شناسه مهمان');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'نتایج را با شناسه مهمان نمایش بدا');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'ستاره ها');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'گزینه ستاره ها را نمایش بده');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'تعداد مهمانان');
jr_define('_JOMRES_SEARCH_STARS', 'تعداد ستاره ها');
jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE', 'فاکتور های کمیسیون');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'تعداد ملک ها');
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "If you use Joomfish, you should set this to No, and use Joomfish's language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the business list whereas medium sized thumbnails are used in the business header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define('_JRPORTAL_ROI_TAB', 'ROI');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'از امکانات کمیسیون استفاده شود؟');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT', 'A new commission invoice has been raised');
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE', 'A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their businesses unpublished.');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Use this option to change the site's language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to \"Yacht Brokerage\" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called \"yachtbrokerage\". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can't be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory. Note that if you create a new property type, then a copy of the current language file is made in a subdirectory under /jomres/language with a name that reflects the new property type's description.");
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Set this option to Yes if you want to use the advanced site configuration options. If you're just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as \"admin\" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Solo, Silver or Gold. Users of the free, core system will not be able to take full advantage of the features that they enable.");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'قیمت (گرانتر به ارزانتر)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'قیمت (ارزانتر به گرانتر)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'تخمین هزینه کل بر اساس هرشب یا هر هفته یا هر ماه باشد؟');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'برای هر شب');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'برای هر هفته');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'برای هر ماه');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'برای هر نفر');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', "Affects all search modules. When using the guest number search feature, should the search feature look for properties who's tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater?");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'لطفا منتظر باشید، درخواست شما در حال پردازش است...شما به درگاه پرداخت ارجاع داده میشوید');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'اگر پس از 20 ثانیه به صورت خودکار به درگاه پرداخت ارجاع داده نشدید');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'اینجا کلیک کنید');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'اعتبار رزرو از تاریخ');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'اعتبار رزرو تا تاریخ');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'نام مهمان');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'با کوپن تخفیف شما، این رزرو شامل تخفیف شده است از');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'به');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'مبلغ کل به همراه مالیات');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'ملک تعلیق شده');
jr_define('_JOMRES_CONVERSION_TITLE', 'از امکان تبدیل واحد پول استفاده شود؟');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency conversion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE', 'Use javascript caching?');
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No.");
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW', 'مهمانان قبلی و فعلی را در لیست نمایش بده');
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW', 'فقط مهمانان فعلی را نمایش بده');
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'تبدیل واحد پول/کد واحد پول');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', "To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor's country, however you need to register for an API key at IPinfoDB first.");
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC', "If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they're hidden behind the popup)");
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', "In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It's likely that you'll need to experiment with different settings to find something that works well in your chosen template.");
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'هزینه ها بدون مالیات');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'هزینه ها به همراه مالیات');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', ':مالیات');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'فرم رزرو را باز کن');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'بازگشت به توضیحات ملک');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'انتخاب به صورت اتوماتیک؟');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'مانده حساب (بعد از پرداخت بیعانه)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'فیلتر کردن اتاق بر اساس امکانات');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'آخرین رزرو');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'ثانیه');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'دقیقه');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'ساعت');
jr_define('_JOMRES_DATEPERIOD_DAY', 'روز');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'هفته');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'ماه');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'سال');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'دهه');
jr_define('_JOMRES_DATEPERIOD_S', '');
jr_define('_JOMRES_DATEPERIOD_AGO', 'قبل');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'از حالا');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'رزرو برای تمامی روزها؟');
jr_define('_JOMRES_WHOLEDAY_DESC', 'بر اساس پیش فرض هزینه یک رزرو بر اساس هر شب اقامت محاسبه میشود، اما اگر میخواهید هزینه ها بر اساس روز محاسبه شود این گزینه را انتخاب کنید');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'روزانه');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'برای هر نفر روزانه');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'ورود');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'بازگشت');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'تعداد روزها');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'تاریخ بازگشت اشتباه است');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'مدت اقامت کوتاهتر از مدت تعیین شده است');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'حداقل مدت اقامت');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that's automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'جمع هزینه ها به صورت هر روز یا هر هفته یا هر ماه محاسبه شود');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'برای هر روز');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'تعداد روزهای مانده تا ورود');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'فاصله روزهایی که باید بین امروز تا روز شروع وجود داشته باشد');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today's date");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'ورودی روز پایان فعال شود؟');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that \"defined pickup day\" isn't set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'روز شروع از پیش تعیین شده');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'روز شروع از پیش تعیین شده');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'برای هر نفر هر روز');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Variable deposits allow you to define if you'd like to charge the full amount if the booking's pickup date is within N days from \"today\". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn't busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'نرخ هر روز');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'تعداد روزها');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');
jr_define('_JOMRES_BOOKINGFORMWIDTH', 'Booking form width in px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED', 'Allow the totals panel to slide down the booking form?');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC', "The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device's browser then sliding is automatically disabled.");
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'مهلت برای لغو رزرو');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');
jr_define('_JOMRES_EDIT_PROFILE', 'ویرایش پروفایل');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'تصویر');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT', 'Business types that can show this feature');
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their \"edit\" icon to view the business's statistics.");
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'ویرایش نرخ مالیات');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version :');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Latest Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');
jr_define('_JOMRES_PRODUCT_INFORMATION', "Welcome to Jomres, we hope you enjoy using Joomla's favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license,  please visit our site for information on how you can upgrade.");
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'ملک فعال');
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY', 'ملک فعال خود را تغییر دهید');
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL', "Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'تنظیمات ایمیل');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_WARNING_SYSTEM_CACHE', 'Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.');
jr_define('_JOMRES_QUICK_INFO', 'اطلاعات مختصر');
jr_define('_JOMRES_MENU_SHOW', 'نمایش دادن');
jr_define('_JOMRES_MENU_HIDE', 'مخفی کردن');
jr_define('_JOMRES_MENU_SHOW_TITLE', 'Use the alternate menu layout?');
jr_define('_JOMRES_MENU_SHOW_DESC', "Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'پیش فرض');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'همه');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'عضو');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'مدیر');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'مدیر ارشد');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'هیچکس');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'کنترل دسترسی');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'مسئول پذیرش');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'دسترسی کامل');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set 00009user_option_03_search to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'دسترسی کامل');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.<br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes anybody can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for every Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'کاربرانی که دسترسی مدیریتی به این ملک دارند');
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES', 'تمام فاکتورهای این کاربر را نمایش بده');
jr_define('_JOMRES_DEBUGGING_SUBJECT', 'موضوع');
jr_define('_JOMRES_DEBUGGING_FULLNAME', 'نام کامل');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'آدرس ایمیل');
jr_define('_JOMRES_DEBUGGING_ISSUE', 'مشکل خود را بیان کنید');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'مدل');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'پارامترها');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_FOUNDPROPERTIES', 'Properties found');
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2', 'Add your property : Step 1 of 2');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property : Step 2 of 2');
jr_define('_JOMRES_MYPROPERTIES', 'ملک های من');
jr_define('_JOMRES_CART_TITLE', 'رزروهای در حال انجام');
jr_define('_JOMRES_CART_INFO', 'توجه داشته باشید که این رزروها ذخیره نشده اند و در صورت بستن صفحه از بین میروند، لطفا رزروهای خود را تایید کنید');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'تایید رزرو');
jr_define('_JOMRES_CART_OR', 'یا');
jr_define('_JOMRES_CART_SAVEFORLATER', 'ذخیره برای بازبینی در آینده');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'شما رزرو ذخیره شده ای ندارید');
jr_define('_JOMRES_CART_VIEWCART', 'نمایش سبد رزرو');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_CLEARDATES', 'زمان اقامت هنوز مشخص نیست');
jr_define('_JOMRES_MOBILE_REDIRECT', 'تغییر به حالت بدون فریم برای موبایل و تبلت؟');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC', 'Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');
jr_define('_JOMRES_SYSTEM_EMAILS', 'ایمیل از کدام آدرس ارسال شود');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_CSS_CACHING_TITLE', 'Use css caching?');
jr_define('_JOMRES_CSS_CACHING_DESC', '');
jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX', 'Search calendars show the clear dates checkbox?');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'نمایش به صورت لیست');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'نمایش به صورت تصویر');
jr_define('_JOMRES_COMPARE', 'مقایسه');
jr_define('_JOMRES_REMOVE', 'حذف');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'بازگشت به نتایج جستجو');
jr_define('_JOMRES_ADDTOSHORTLIST', 'shortlist اضافه کردن به');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'short list حذف کردن از ');
jr_define('_JOMRES_VIEWSHORTLIST', 'shortlist نمایش ');
jr_define('_JOMRES_COOKIEPOLICY_TITLE', 'Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_DESC', "EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as 'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user' (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'We use cookies to help keep our site relevant and easy to use.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Read more...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'بله من اجازه استفاده از کوکی را میدهم');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'مبلغ بیعانه برابر با هزینه اقامت شب اول است؟');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'اگر میخواهید مبلغ بیعانه برابر با شب اول باشد لازم نیست بقیه گزینه ها را تنظیم کنید');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'شما هیچ مورد shortlist ی را به اضافه نکردید');
jr_define('_JOMRES_MOBILE_SETTINGS', 'تنظیمات نمایش برای موبایل');
jr_define('_JOMRES_SIMULATE_MOBILE', 'حالت نمایش در موبایل را بازسازی کن');
jr_define('_JOMRES_SIMULATE_MOBILE_DESC', "Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION', 'Simulation IP');
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC', "You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('_JOMRES_USE_JOMRESEDITOR', "Use Jomres' WYSIWYG editor? (recommended)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC', "If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");
jr_define('COMMON_NEXT', 'بعدی');
jr_define('COMMON_CANCEL', 'لغو');
jr_define('COMMON_SUBMIT', 'ارسال/ثبت');
jr_define('COMMON_SAVE', 'ذخیره');
jr_define('COMMON_DELETE', 'حذف');
jr_define('COMMON_RETURN', 'بازگشت');
jr_define('COMMON_CLOSE', 'بستن');
jr_define('COMMON_BACK', 'به قبلی');
jr_define('COMMON_HOME', 'خانه');
jr_define('COMMON_NEW', 'جدید');
jr_define('COMMON_SEND', 'ارسال');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at the Google reCaptcha home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC', 'If you are running a bootstrap enabled template in the frontend of this site set this option to Yes.');
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'نمایش');
jr_define('BACKTOTOP', 'بازگشت به بالا');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'ضعیف');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'قوی');
jr_define('_JOMRES_INPUTFILTERING', 'فیلتر ورودی');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'.");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Allowed input tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at htmlpurifier.org. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Property details in tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');
jr_define('COMMON_PRINT', 'پرینت');
jr_define('COMMON_EDIT', 'ویرایش');
jr_define('COMMON_COPY', 'کپی');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR', 'Use Jomres Bootstrap templates in the administrator area?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Here are some alternatives you might want to consider.');
jr_define('_JOMRES_BEEZ_WARNING', 'Note, your frontend template is currently set to Beez3. Please be aware that our templates are not compatible with Beez3 and we recommend that you switch your site template to a Bootstrapped template such as Protostar.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'درباره جومرس');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'کمک');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN', 'منوی اصلی');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Getting started');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE', 'تعمیر و نگهداری سیستم');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'کنترل دسترسی');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'ابزار برنامه نویسی');
jr_define('_JOMRES_CUSTOMCODE_ASAMODULE', 'ASAModule');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'زبان ها');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'محاسبه درآمد');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING', 'حسابداری');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'ساختار سایت');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT', 'مدیریت کاربران');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'My Account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS', 'scheduled tasks');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portal functionality');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'گزارشات');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES', 'مالیات');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_TICKETS', 'Tickets (online)');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Upgrades');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'روش های پرداخت');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'تعرفه پیش فرض');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'این فقط شامل تعرفه های جدید میشود');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'تعداد سال ها برای نمایش');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a tariff type');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'فاکتورها');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'جزئیات حساب کاربری');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'ورود کاربر');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'خروج کاربر');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'جستجو');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'داشبورد');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'رزرو');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS', 'مدیریت');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'تنظیمات');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'غیره');
jr_define('_JOMRES_PROPERTYCONFIG_SRPS', 'SRPs');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'ویرایش کشور');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'شناسه کشور');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'کد کشور');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'نام کشور');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'ویرایش استان');
jr_define('_JOMRES_EDIT_REGION_ID', 'شناسه استان');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'کد استان');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'نام استان');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'لیست کشورها');
jr_define('_JOMRES_COM_LISTREGIONS', 'لیست استان ها');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', 'خطا، شناسه کاربری شما دسترسی تغییر این قسمت را ندارد، فقط کاربران با دسترسی مدیر ارشد میتوانند قسمت های حساس سیستم را تغییر دهند');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');
jr_define('_JOMRES_LASTEDITED_WARNING_72', "Jomres uses templates to construct it's output. If you are a designer this makes changing the look and feel of Jomres easy, you don't need to edit any of the code, you just need to edit the template's markup. This Template Editing feature allows you to create your own customised versions of these Jomres templates. <br/>
<br/>
When you customise a template you have the option to make the customisation specific to all property types, or a specific property type. For example the NGM Random module plugin uses the basic_module_output.html template to construct layout. As a result you can create different customisations of the basic_module_output.html template for different property types.  <br/>
<br/>
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you're taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you've already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn't another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you've edited a template but don't like the changes you've made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file's last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn't necessarily mean that you need to update your template customisation however, that's up to you to decide if you need to do that");
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'حداقل اقامت');
jr_define('_JOMRES_NIGHTSFOR', 'شب فقط به قیمت');
jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS', 'Property list images, show the property image as a gif if slideshow images are available.');
jr_define('_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY', 'Show as GIFs only if the property is a featured property.');
jr_define('_JOMRES_AGENT', 'نماینده');
jr_define('_JOMRES_AGENT_DETAILS', 'اطلاعات نماینده');
jr_define('_JOMRES_AGENT_LISTINGS', 'لیست ملکهای نماینده');
jr_define('_JOMRES_PROPERTY_LANG', 'Property language');
jr_define('_JOMRES_PROPERTY_LANG_DESC', 'The default language of this property.');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'ملکهای جدید به صورت اتوماتیک تایید شوند؟');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'منوی تایید ملک');
jr_define('_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL', 'ملکهای منتظر تایید');
jr_define('_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL', 'هیچ ملکی برای تایید وجود ندارد');
jr_define('_JOMRES_APPROVALS_APPROVE', 'تایید این ملک');
jr_define('_JOMRES_APPROVALS_REVIEW', 'بررسی این ملک');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'این ملک هنوز تایید نشده است، پس از تایید شما میتوانید آنرا منتشر کنید');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'متاسفانه ملک مورد نظر شما هنوز تایید نشده است');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'ملک جدیدی نیاز به تایید دارد');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'ملک جدیدی به سیستم اضافه شده است که نیاز به تایید دارد، برای دیدن لیست ملکهای منتظر تایید اینجا کلیک کنید');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'ملک شما تایید شد');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'به به ! ملک شما تایید شد، برای دسترسی به منوی تنظیمات اینجا کلیک کنید');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'نام استان ها قابل ترجمه هستند');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'بهتر است این گزینه را انتخاب نکنید چون سیستم شما برای ترجمه بسیار کند خواهد شد');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Guest booked out.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'متاسفانه ایمیل وارد شده قبلا در این سیستم استفاده شده است، لطفا قبل از رزرو به حساب کاربری خود وارد شوید');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'نظر جدید برای');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'یک نظر جدید ثبت شده است برای');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'گزارش جدید');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'یک گزارش ثبت شده است برای نظر در مورد');
jr_define('JOMRES_NON_REGISTERED_USER', 'کاربر ثبت نشده');
jr_define('JOMRES_JQUERY18_2', 'Use Jquery 2.x?');
jr_define('JOMRES_JQUERY18_2_DESC', "Jquery 2.x is faster than previous implementations of jQuery, however it lacks certain things like $.browser and support for IE6/7/8 and older Firefox and Safari browsers. If you're seeing javascript errors on your page, or if your template/other plugins (like slideshows) use older versions of jQuery then you should set this option to No.");
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_SUPERIOR_S', '(S)');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', ':مبلغ کل بدون مالیات');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', ':مبلغ کل با مالیات');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', ':کل مالیات');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'دو کلمه ای مه میبینید را وارد کنید');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'چیزی که میشنوید را وارد کنید');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'بازپخش فایل صوتی');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'MP3 دریافت فایل صوتی به صورت ');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'حالت تصویری');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'حالت صوتی');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'بارگزاری مجدد');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'کمک');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'متاسفانه صحیح نبود، دوباره سعی کنید');
jr_define('JOMRES_GOOGLE_MAPS', 'تنظیمات نقشه گوگل');
jr_define('JOMRES_GOOGLE_MAPS_INFO', 'بهتر است تنظیمات اضافی نقشه گوگل مثل آب و هوا را فعال نکنید چون باعث کند شدن نمایش نقشه میشوند');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'لایه آب و هوا روی نقشه نمایش داده شود؟');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD', 'فارنهایت یا سلسیوس ؟');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'سلسیوس');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'فارنهایت');
jr_define('JOMRES_GOOGLE_MAP_OPTION_PANORAMIO', 'از لایه پانورامیو استفاده شود؟');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'از لایه ترنزیت استفاده شود؟');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRAFFIC', 'از لایه ترافیک استفاده شود؟');
jr_define('JOMRES_GOOGLE_MAP_OPTION_BICYCLING', 'Use bicycling layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'آیا نقاط دیگر هم در نقشه نمایش داده شود؟ این نقاط میتوانند رقبای شما باشند');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_PLEASE_PRINT', 'لطفا این ایمیل را چاپ کنید و در هنگام مراجعه به همراه داشته باشید');
jr_define('_JOMRES_OFFICE_USE_ONLY', 'Office use only');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'این کد را اسکن کنید تا مسیر دسترسی به ما برای شما نمایش داده شود');
jr_define('_JOMRES_VAT_FEATURE_ENABLE', 'New in Jomres 7.3 is a feature which allows business owners and guests who have valid VAT numbers to enter their details and not have VAT applied to their invoices where appropriate. This feature is intended to be used by EU based property managers.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED', "VAT number wasn't entered.");
jr_define('_JOMRES_TAX_RULES_LIST', 'لیست قوانین مالیاتی');
jr_define('_JOMRES_TAX_RULE', 'قانون مالیاتی');
jr_define('_JOMRES_TAX_RULE_INFO', 'قوانین مالیاتی با توجه به کشور های مختلف متفاوت هستند، این قوانین بر اساس مکان قرارگیری ملک تایین خواهند شد');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'ویرایش مالیات');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'اطلاعات شغلی که اینجا وارد شده است برای فاکتورها استفاده خواهد شد');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'جزئیات اتاق');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'جزئیات تعرفه');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'فقط');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', '!باقی مانده');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'امکانات ملک');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'قادر به حذف این امکان نیستید، این امکان به ملک دیگری نیز متصل است');
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY', 'سرویس ارسال تصاویر');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'اضافه کردن تصویر');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'تصاویر اتاق');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'تصاویر اصلی ملک');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'تصاویر برای نمایش در اسلاید');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'پاک کردن لیست');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'ملکی که میخواهید برای آن تصویر ارسال کنید را انتخاب کنید');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS', 'میباشد PNG & JPG حداکثر حجم فایل 2000 کیلوبایت و فرمت های قابل ارسال ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'اگر چند تصویر را به عنوان تصویر اصلی ملک ارسال کردید، فقط تصویر اول نمایش داده خواهد شد');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'نمایش تصویر');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'حذف تصویر');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'ارسال تصویر');
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES', 'تصاویر انواع اتاق ها و امکانات');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'آیکن های نوع اتاق');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'آیکن های امکانات ملک');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'ارسال همه فایل ها');
jr_define('END_TOUR', 'بستن');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', 'به ملک خود خوش آمدید');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', 'به داشبورد خود خوش آمدید، این منوی اصلی است..اگر میخواهید چیزی که برای مشتری نمایش داده میشود را ببنید به قسمت املاک بروید و گزینه پیش نمایش را انتخاب کنید');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', 'این نام ملک شماست');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', 'هر وقت که شما به عنوان مدیر ملک وارد میشوید یک ملک فعال دارید که نامش اینجا نمایش داده می شود، شما نمیتوانید در یک زمان روی چند ملک تغییر ایجاد کنید');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', 'این منوی انتخاب محدوده زمان است');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync.");
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', 'انتخاب زبان');
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', 'You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', 'This is the Editing Mode selector.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', 'You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', 'This is content area.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', 'In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', 'Active property switch page.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage.");
jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', 'This is where your property names will show.');
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', 'This is your property header.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', 'This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address.');
jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', 'Your photo gallery.');
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', 'This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', 'Main buttons.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', 'Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', 'Inline Calendar.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', 'Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', 'Rooms list tab');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', 'Here you can see all rooms, and the availability of each room if you click on the availability button.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', 'Reviews list.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', 'Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property.');
jr_define('TOUR_ID_MAPTAB_TITLE', 'Map tab.');
jr_define('TOUR_ID_MAPTAB_CONTENT', 'Under this tab your guests can see your property in a zoomable map.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', 'More Information tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', 'Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', 'Booking Form.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', 'Your guests can either go to a separate page, or they can use the booking form in this tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', 'Main Property Details.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', 'All current and future tariffs');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', 'This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', 'Local Events.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', 'If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', 'Local Attractions.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', 'If there are any attractions near to you, like museums or amusement parks they will be listed here.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', 'Available Auctions.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', 'If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', 'Booking configuration.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', 'On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', 'Your Business details.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you.");
jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', 'External links.');
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', 'You can add a link to another site here.');
jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', 'Gateways.');
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', 'Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online.');
jr_define('TOUR_ID_TAB_MISC_TITLE', 'Miscellaneous .');
jr_define('TOUR_ID_TAB_MISC_CONTENT', "This tab is for settings that don't fit into any other tab.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', 'Property details page settings.');
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page).");
jr_define('TOUR_ID_TAB_REQUIRED_TITLE', 'Required items in the booking form.');
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', 'This tab allows you to set which items in the booking form that are required or optional.');
jr_define('TOUR_ID_TAB_SRPS_TITLE', 'Villa/Apartment specific settings.');
jr_define('TOUR_ID_TAB_SRPS_CONTENT', "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties.");
jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', 'Single Person Supplements.');
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', 'Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual.');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', 'Tariffs');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', 'On this page you can configure how tariffs and deposits are calculated.');
jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', 'Tourist Tax.');
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', 'If your country or city charges tourist taxes, you can configure them here.');
jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', 'Micromanage settings.');
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', 'Micromange tariff editing mode specific settings.');
jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', 'Wise Price settings.');
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', 'This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', 'Your properties.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property.");
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', 'The table.');
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', 'Property creation, step 1.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', 'Property country.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', 'Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', 'The property type.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Management process.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', 'Property creation step 2.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', 'MRP or SRP.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', 'Property name & address.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', 'Please enter the property name and address in the following fields.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', 'Number of stars.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', 'If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', 'Mapping location.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', 'Property features.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', 'Information about your property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', 'You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', 'Policies and Disclaimers.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window.");
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', 'List all bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', 'On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', 'List new bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page.");
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', 'List old bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', 'List guests.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', 'The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', 'Overrides.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', 'Coupons.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', 'If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', 'Particulars.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', 'Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', 'Room features filter.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Optional extras.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', 'Existing guests.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', 'Guest details.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Black bookings.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', 'Information about your property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', 'Normal mode tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', 'Normal mode tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', 'Rooms and Tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', 'Rooms and Tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', 'On this page you can edit your property type and your tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', 'Guest types.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type.");
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', 'Coupons.');
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied.");
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', 'Optional extras.');
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE', 'Media Centre.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT', 'The Media Centre allows you to easily upload images of your property. By default you can upload a main property image (in fact, you can upload more, but only the first in the list will be used), an unlimited number of images to be shown in the slideshow, and an unlimited number of images for each room.The maximum file size for uploads is 2000 KB. Only JPG and PNG images are allowed.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', 'Resource picker.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', 'Existing images.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', 'This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', 'Upload controls.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', 'Selected images.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', "This column shows the images that are ready for upload, or that you've uploaded since you visited this page.");
jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', 'Finished!');
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us.");
jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'HELP');
jr_define('COMMON_PREV', 'قبلی');
jr_define('COMMON_MORE', 'بیشتر');
jr_define('_JOMRES_DASHBOARD_TODAY', 'امروز');
jr_define('_JOMRES_DASHBOARD_YEAR', 'سال');
jr_define('_JOMRES_DASHBOARD_MONTH', 'ماه');
jr_define('_JOMRES_DASHBOARD_WEEK', 'هفته');
jr_define('_JOMRES_DASHBOARD_DAY', 'روز');
jr_define('_JOMRES_HLEGEND', 'توضیح');
jr_define('_JOMRES_HFILTER', 'فیلتر');
jr_define('_JOMRES_HFROM', 'از');
jr_define('_JOMRES_HTO', 'تا');
jr_define('_JOMRES_HNEW_BOOKING', 'رزرو جدید');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'وضعیت بیعانه');
jr_define('_JOMRES_HSTATUS_GUEST', 'وضعیت مهمان');
jr_define('_JOMRES_HSTATUS_BOOKING', 'وضعیت رزرو');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'وضعیت انتشار');
jr_define('_JOMRES_HSTATUS_INVOICE', 'وضعیت فاکتور');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'نوع فاکتور');
jr_define('_JOMRES_HSTATUS_APPROVED', 'تایید شده');
jr_define('_JOMRES_HSTATUS_CURRENT', 'این کسب و کار');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'نمایش رزرو برای');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'نمایش فاکتور برای');
jr_define('_JOMRES_STATUS_ANY', 'همه');
jr_define('_JOMRES_STATUS_PAID', 'پرداخت شده');
jr_define('_JOMRES_STATUS_NOTPAID', 'پرداخت نشده');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'تسویه حساب کرده');
jr_define('_JOMRES_STATUS_ACTIVE', 'فعال');
jr_define('_JOMRES_STATUS_CANCELLED', 'لغو شده');
jr_define('_JOMRES_STATUS_PUBLISHED', 'منتشر شده');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'منتشر نشده');
jr_define('_JOMRES_STATUS_PROVISIONAL', 'رزرو موقت');
jr_define('_JOMRES_STATUS_CONFIRMED', 'رزرو تایید شده');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'مهمانان با رزرو فعال');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'مهمانان با رزروهای گذشته');
jr_define('_JOMRES_STATUS_BOOKINGS', 'رزروها');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'اشتراک ها');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'کمیسیون ها');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'تمام املاک من');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'تغییر حالت به فعلی');
jr_define('_JOMRES_ACTION_CHECKIN', 'اعلام حضور');
jr_define('_JOMRES_ACTION_CHECKOUT', 'تسویه حساب');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'رزرو ها');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'املاک');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'مهمانان');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'گزارشات');
jr_define('_JOMRES_HLIST_GUESTS', 'مهمانان');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'لیست مهمانان');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'لیست فاکتورها');
jr_define('_JOMRES_HLIST_PROPERTIES', 'املاک');
jr_define('_JOMRES_HQUICK_BOOKING', 'رزرو سریع');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'تاریخ رزرو');
jr_define('_JOMRES_HTWO_WEEKS', 'دو هفته');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'این رزرو لغو خواهد شد...لطفا تایید کنید');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'اعلام حضورهای امروز');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'تسویه حساب های امروز');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'ساکنان فعلی');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB', 'Navigation bar settings');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'نمایش مهمانان برای');
jr_define('_JOMRES_HFIXED_PERIODS', 'بازه زمانی مشخص');
jr_define('_JOMRES_HDEPOSITS', 'بیعانه ها');
jr_define('_JOMRES_HBOOKING_FORM', 'رزرو از');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'اطلاعات ضروری');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'نام');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'نام خانوادگی');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', 'پلاک');
jr_define('COMMON_PLACEHOLDER_STREET', 'خیابان');
jr_define('COMMON_PLACEHOLDER_TOWN', 'شهر/شهرک');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'نام ملک');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNNXNNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'ایمیل');
jr_define('EXTENDED_CONFIGURATION', 'تنظیمات پیشرفته');
jr_define('SIMPLE_CONFIGURATION', 'تنظیمات ساده');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'امکانات ملک');
jr_define('_JOMRES_HRESOURCE_TYPE', 'نوع ملک');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'ویرایش نوع مهمان');
jr_define('_JOMRES_HEDIT_COUPON', 'ویرایش کوپن');
jr_define('_JOMRES_HEDIT_EXTRA', 'ویرایش خدمات اضافه');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'ایجاد املاک متعدد');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'چه تعداد ملک؟');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'نوع املاک');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'حداکثر تعداد مهمان برای هر ملک');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'تمامی املاک فعلی حذف شوند؟');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE', 'تنظیمات رزرو');
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT', 'در این تب شما میتوانید شکل و شمایل فرم رزرو را تغییر دهید');
jr_define('TOUR_ID_TAB_BOOKINGS_TITLE', 'رزروها');
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT', 'در این تب شما میتوانید تنظیمات رزرو را تغییر دهید');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE', 'ویرایش اطلاعات مهمان');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT', 'در اینجا شما میتوانید اطلاعات مهمان را تغییر دهید، توجه داشته باشید که این تغییرات فقط در مورد این رزرو انجام میشود');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE', 'VAT.');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT', "If a VAT number is entered here then it will be shown on the guest's invoice.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE', 'تخفیف');
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT', 'شما میتوانید برای این مهمان خاص یک تخفیف اتوماتیک تعیین کنید که از این به بعد انجام خواهد شد');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'تایید');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'رد کردن این رزرو(نپذیرفتن)');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'تایید این رزرو');
jr_define('_JOMRES_STATUS_APPROVED', 'تایید شده');
jr_define('_JOMRES_STATUS_REJECTED', 'رد شده');
jr_define('_JOMRES_STATUS_INQUIRY', 'استعلام');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'آیا رزرو ها نیاز به تایید دارند؟');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'خطا');
jr_define('_JOMRES_ERROR_MESSAGE', 'متاسفانه در انجام این عملیات خطایی رخ داده، این خطا توسط ما بررسی خواهد شد');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'پیغام');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'فایل');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'خط');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'ردیابی');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'الگوهای ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'ویرایش الگوهای ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'موضوع ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'متن ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'نوع ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'نام ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'توضیحات ایمیل');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'ایمیل رزرو جدید برای مدیر رزرواسیون');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'استفاده کنید، برای هر رزرو یک ایمیل به مدیر رزرواسیون ارسال خواهد شد global paypal gateway در صورتی که از ');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'ایمیل رزرو جدید برای هتل');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'وقتی رزرو جدیدی انجام میشود، یک ایمیل برای مدیر ملک ارسال میشود');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'ایمیل رزرو جدید برای مهمان');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'ایمیلی که پس از رزرو برای مهمان ارسال میشود');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'نامه تاییدیه برای مهمان');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'نامه یا ایمیلی که قابل چاپ است و به توسط مدیر ملک برای مهمان ارسال میشود');
jr_define('_JOMRES_CAN_BE_APPROVED', 'این رزرو میتواند تایید شود، کلیه املاک مرتبط در تاریخ های مورد نظر آزاد هستند');
jr_define('_JOMRES_CANT_BE_APPROVED', 'این رزرو نمی تواند تایید شود، یک یا تعدادی از املاک مورد نظر در آن تاریخ آزاد نیستند');
jr_define('_JOMRES_SHOW_POWEREDBY', 'آیا متن (تولید شده توسط جومرس) در پایین صفحه نمایش داده شود؟');
jr_define('GUEST_BUDGET', 'اقتصادی');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'آیا از امکانات حالت اقتصادی استفاده شود؟');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', ':نام');
jr_define('_JOMRES_FOR', 'برای');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'شب');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'شب');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY', 'آیا قیمت پوشانده شود؟');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC', 'In the property list it is possible to show a cumulative price over the property image, use this setting to switch that display off. The cumulative price is calculated from the dates entered in the ajax search composite plugin.');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JOMRES_ONLINE_PARTNERS', 'Partners');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'ژانویه');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'فوریه');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'مارس');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'آوریل');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'مه');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'ژوئن');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'ژوئیه');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'اوت');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'سپتامبر');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'اکتبر');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'نوامبر');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'دسامبر');
jr_define('DATATABLES_SEMPTYTABLE', 'اطلاعاتی در جدول وجود ندارد');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('DATATABLES_SINFOEMPTY', 'Showing 0 to 0 of 0 entries');
jr_define('DATATABLES_SINFOFILTERED', '(filtered from _MAX_ total entries)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Show _MENU_ entries');
jr_define('DATATABLES_SLOADINGRECORDS', '...در حال آماده سازی');
jr_define('DATATABLES_SPROCESSING', '...در حال پردازش');
jr_define('DATATABLES_SSEARCH', ':جستجو');
jr_define('DATATABLES_SZERORECORDS', 'نتیجه ای برای نمایش وجود ندارد');
jr_define('DATATABLES_SFIRST', 'اولی');
jr_define('DATATABLES_SLAST', 'آخری');
jr_define('DATATABLES_SNEXT', 'بعدی');
jr_define('DATATABLES_SPREVIOUS', 'قبلی');
jr_define('DATATABLES_SSORTASCENDING', 'مرتب سازی افزایشی فعال شود');
jr_define('DATATABLES_SSORTDESCENDING', 'مرتب سازی کاهشی فعال شود');
jr_define('DATATABLES_SHOWHIDE', 'تغییر ستون ها');
jr_define('_BOOKING_ONREQUEST', 'رزرو طبق درخواست');
jr_define('_BOOKING_INSTANT', 'رزرو سریع');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'درخواست رزرو');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'عزیز');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'انتخاب مکان');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'شناسه مکان');
jr_define('_JOMRES_IS_EU_COUNTRY', 'کشورهای اتحادیه اروپا؟');
jr_define('_JOMRES_WORD_CACHING', 'Caching');
jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING', 'Use patTemplates Caching?');
jr_define('_JOMRES_HLASTCHANGED', 'آخرین تغییرات');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'ایمیل لغو رزرو به هتل');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'ایمیلی که پس از لغو یک رزرو به مالک ارسال میشود');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'ایمیل لغو رزرو به مهمان');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'ایمیلی که پس از لغو رزرو به مهمان ارسال میشود');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'ارسال ایمیل آزمایشی');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'ایمیل آزمایشی');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'این یک ایمیل آزمایشی از سیستم رزرواسیون شما است');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'ایمیل آزمایشی با موفقیت ارسال شد');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'ایمیل آزمایشی ارسال نشد');
jr_define('_INVOICE_TRANSACTIONS', 'عملیات مالی');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can register for a free key at <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits.');
jr_define('_JOMRES_COMMISSION', 'کمیسیون');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'اگر چند تصویر برای امکانات اضافه ارسال کنید فقط تصویر اول نمایش داده میشود');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'پرداخت مبلغ فاکتور');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'این فاکتور آماده پرداخت است، لطفا جهت مشاهده روش های پرداخت کلیک کنید');
jr_define('_JOMRES_EXTRAS_TEMPLATE', 'اینجا میتوانید لیستی از چیزهایی جالبی که هنگام اقامت در این ملک میتوانید خریداری کنید را مشاهده کنید');
jr_define('_ASSIGN_COMMISSION_RATES', 'اعمال نرخ کمیسیون');
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('PROPERTY_STATS_SALES', 'رزرو شده ها');
jr_define('PROPERTY_STATS_SALES_DESC', 'This is when bookings were taken');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS', 'روزهای رزرو شده');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC', 'تعداد روزها و روز شروع رزرو');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS', '(روزهای رزرو x  رزرو ها (اتاق');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC', 'تعداد روزهای رزرو شده در یک ماه مشخص');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'آیکن های امکانات اتاق');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'دسته بندی های امکانات ملک');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'ویرایش دسته بندی امکانات ملک');
jr_define('_JOMRES_HCATEGORY', 'دسته بندی');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'آیا امکانات ملک به صورت دسته بندی شده نمایش داده شود؟');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'اگر می خواهید امکانات ملک به صورت دسته بندی شده نمایش داده شود این گزینه را فعال کنید، این نوع نمایش فقط در صفحه توضیحات ملک وجود دارد');

jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');

jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');

jr_define('DEFAULT_TERMS_AND_CONDITIONS', 'These Terms and Conditions clarify The Owner\'s obligations to The Renter, The Renter\'s obligations to The Owner, and in the very unlikely event of any disputes, will be used as the basis for any resolution. Please read them carefully before confirming your booking.

Check-In: From [Time] / Check-Out: By [Time] (High Season Weekly Rentals)

For Low Season Weekend and Mid-Week Rentals an earlier Check-In and later Check-out may be possible (usually In from [Time] and out by [Time])

Acceptance of these Terms & Conditions binds a contract between the following two parties:

The Rental Applicant (The Renter) and The Property Owner (The Owner)

 

 1. Party Members

All persons listed on the Rental Agreement or added subsequently by The Renter will be bound by the terms of this agreement. Occupancy of the property is restricted to those names listed on the Agreement or added subsequently by The Renter.   The Rental Applicant is considered to be the Lead Renter and will assume full responsibility for all members of the Rental Group throughout the rental period.   Information or instructions relating to this rental will be communicated to the Rental Applicant only and not to any third-party member of the Rental Group.

2. Payments

A Reservation will be confirmed by The Owner once the application has been approved and initial or full payment has been processed.   For reservations of one week or more, if the reservation is made 45 days or more before the rental commences, an initial rental deposit payment of [X%] of the rental fee will be due at the time of booking. If a reservation is made less than 45 days before the rental commences, or the reservation is less than a full week’s duration, the full rental fee must be paid at the time of booking. In the event of a reservation not being accepted by The Owner, all fees paid will be refunded immediately. Any booking made within 10 days of the start of the rental period must be paid in full by credit card via PayPal, certified check or money order at the time of booking. No reservation may commence without full payment being cleared.

Once a reservation is received and accepted by The Owner, The Renter is liable for payment of the balance of the rental fee 45 days before occupation of the property. Non-payment by the due date will be treated as a cancellation and the deposit will be forfeited.


3. Cancellation Policy & Changing a Booking

Once a reservation has been accepted and confirmed, a cancellation can only be made in accordance with the terms below:

- If the period of rental can be re-booked, a refund for the period re-rented or the part thereof, less a cancellation fee of [Amount]  will be issued.

- If any part of the rental period cannot be re-booked, the Renter will forfeit all monies paid for that period.

 4. Occupancy of the Property

Regardless of the published maximum number of persons a property can accommodate, the number of guests occupying the Property is strictly limited to those named on the Rental Agreement or any subsequent amendment notified in writing to The Owner. The stated and agreed occupancy figure includes all persons irrespective of age, day and overnight guests.

Exceeding the number of stated and agreed persons will result in immediate eviction without refund, or a $100 per guest per night charge at the discretion of The Owner.

 5. Condition of the Property

The Property will have been inspected prior to occupation and therefore The Renter undertakes to:

- Notify The Owner immediately with regard to any damage and/or maintenance issues that require attention.

- Keep the Property and all furniture, fixtures, fittings, chattels and effects in or about the Property in the same state of repair and condition as found at the commencement of the Rental.

 

- Where a cleaning service is provided; The Renter shall follow the departure instructions provided by The Owner.

- Where a cleaning service is not provided; The Renter shall leave the Property in the same state of cleanliness and general order in which it was found. Failure to do so to the satisfaction of The Owner will result in a damage/cleaning charge being levied.

6. Use of Telephone and Internet Services

Where a telephone is provided as part of the rental, The Renter must charge all long-distance telephone calls to either a credit/phone card or call collect, unless advised otherwise. Where internet services are provided, there may be download restrictions and a charge may be levied if these are exceeded. It is The Renter\'s responsibility to check for restrictions on an internet device before commencing any download.

 7. Pets

One dog is permitted [indicate any restrictions]. All evidence of pet occupation must be removed from the Property and grounds at the end of the rental period. Pets are not permitted on any item of furniture, including beds, and evidence of pet hair on furniture and bedding may incur additional cleaning charges.

OR

Pets are strictly prohibited at this property. Any evidence of pet occupation will result in a forfeit of the damage deposit in its entirety.

The Owner accepts no responsibility for any allergic reaction or other conditions arising from occupancy of the property. The designation of “No Pets” does not indicate there have not been pets at the property at some time.

8. Smoking

Smoking is not permitted in or around the immediate vicinity of the property.

9. Property  Access During Winter Months

The Property is  offered for rental during the winter months and has road access and receives a snow clearance service from [indicate municipal or private contractor]. However, Renters are advised that following any major snowfall, snow plough providers are contracted to clear local roads in a predetermined order. Consequently, plowing at a property may be delayed for several hours or, in severe storm conditions, days. In the unlikely event that a Renter is unable to leave a property on the planned departure date, the Renter will not be liable for any additional accommodation charges. Conversely, should a lack of snow clearance prevent a Renter from reaching a property, the Renter will receive a refund of the rental fee for the day(s) the property was inaccessible. However, The Owner will be held responsible for any losses, additional expenses or penalties incurred as a result of being unable to arrive at or leave a property on time due to a lack of snow clearance. Renters are also reminded to ensure that they and their vehicles are suitably prepared and equipped for driving in the wintry conditions likely to be encountered during their visit to the Property.

10.   Equipment and Facilities Provided

Equipment and facilities are provided at the discretion of The Owner and whilst every attempt is made to ensure that such equipment is in working order for the duration of the rental period, should a breakdown or some other situation occur that renders non-essential element unusable, the Owner does not take responsibility for replacing or refunding The Renter for the lack of use of these equipment or facilities. The equipment and facilities referred to include (but are not exclusive to) such items as watercraft, motors, televisions, VCRs/DVDs, hot tubs, saunas and Jacuzzis.

 

The Renter must report any inoperative or defective equipment to The Owner promptly! The Owner will make every reasonable effort to have repairs made as soon as possible; however, there are limited service contractors in [Your Area]. While every attempt will be made to ensure that all the advertised equipment and appliances are in working order at the commencement of a rental period, no reduction of rent; rebate; or refund will be issued for a mechanical failure of air conditioning, dishwasher, washer, dryer, TV or other appliances.

 11.   Refunds

If a breakdown should occur to fundamental elements such as water systems, plumbing and electrical systems, and major appliances such as stove or refrigerator, every effort will be made to repair or replace, or an appropriate refund will be made for the inconvenience caused. This does not apply to system breakdown caused by misuse, such as plumbing blockages caused by inappropriate use of sanitary facilities.

The Owner is not liable, nor will provide a refund, for any stoppage of electrical services caused by extreme weather or other circumstances beyond his control.   Similarly, there will be no refunds for inclement weather, changes in water levels, conditions at neighboring properties, or any nuisance afforded by the natural elements of the location such as flying insects or the animal population.

12. Other Conditions of Booking

The Renter shall abide by these Terms and Conditions of Rental and any other instructions contained in the individual Cottage Guide and any additional information and instructions as shall be supplied in the Property or by The Owner.

 

LIMITATIONS OF LIABILITY: The Renter represents, warrants, acknowledges and agrees with The Owner that he/she will use the Property and its facilities in accordance with The Terms and Conditions above and the Information provided and that he/she does so at his/her own risk and that he/she indemnifies and saves The Owner harmless from any personal injury, sickness or death, loss or damage, however caused, to person or property of The Renter, his/her family, or guests, before during or after the time of occupancy. Further, he/she accepts full responsibility for the use of the Property and any recreational equipment such as boats and motors, etc. and agree to pay for any damage of said equipment, other than for normal wear and tear. The Renter further acknowledges he/she is responsible for ensuring all Boating Regulations are observed, including having required safety equipment in the watercraft, as well as meeting current Operator Competency Requirements.

');

jr_define('_JOMRES_NUMBER_OF_BEDROOMS', 'Bedrooms');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');

jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION', 'You must choose a sub-type before you can create tariffs for this property.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');

jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');

jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');

jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');

jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');

jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');

jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');

jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');

jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');

jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_NEITHER', 'Other (Tours/Realestate)');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');

jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');

jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');

jr_define('_JOMRES_MANAGER_HAS_NO_PROPERTIES', 'Error, this user is configured as a manager but has not been assigned to any properties');

jr_define('_JOMRES_CONTANT_US', 'Contact us');

jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');

jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");

jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');

jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebooking.com or anything else.');

jr_define('COMMON_DOWNLOAD', 'Download');

jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP', 'Property sub-type');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP', 'Property sub-type');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');

jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER', 'Your license does not support plugin downloads.');

jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');

jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] ) otherwise you will not be able to access Jomres from the site frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");

jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES', 'What management process will this room type be for?');
jr_define('_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC', 'Is the room type for a hotel type property, or a villa type property?');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button above to create new Room Types.');

jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');

jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");

jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");

jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');

jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");

jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');

jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");

jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');

jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');

jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");

jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");

jr_define('_JOMRES_FAQ', 'Frequently asked questions');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");

jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");

jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');

jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");

jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");

jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');

jr_define('_JOMRES_SHORTCODES', 'Shortcodes');

jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");

jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');

jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');

jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');

jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');

jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');

