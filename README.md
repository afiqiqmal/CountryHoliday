
# List of Country Holiday
get holiday list from selected country 


### Usage

Holidays in current years

`Holiday::init()->country("malaysia")->getAllRegionHoliday()->get();`

Holidays in specific years

`Holiday::init()->country("malaysia")->getAllRegionHoliday("2017")->get();`

Holidays by regional

`Holiday::init()->country("uae")->getRegionHoliday("Selangor")->get();`

Holidays by regional in 2017

`Holiday::init()->country("usa")->getRegionHoliday("arizona","2017")->get();`


Grouping and Filter result

`Holiday::init()->country("india")->getAllRegionHoliday()->groupByMonth()->get();`

`Holiday::init()->country("malaysia")->getAllRegionHoliday()->filterByMonth("January")->get();  //date('F')	`


### install

`composer require afiqiqmal/countryholiday`


### Source
Scraped from - http://www.officeholidays.com/countries/malaysia

### MIT Licence

