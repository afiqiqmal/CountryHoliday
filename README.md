
# List of Country Holiday
get holiday list from selected country 


### Usage

Holidays in current years

`Holiday::init()->country("malaysia")->getAllRegionHoliday()->get();`

Holidays in specific years

`Holiday::init()->country("usa")->getAllRegionHoliday("2017")->get();`

Holidays by regional

`Holiday::init()->country("usa")->getRegionHoliday("Selangor")->get();`

Holidays by regional in 2017

`Holiday::init()->country("usa")->getRegionHoliday("Selangor","2017")->get();`


Grouping and Filter result

`Holiday::init()->country("usa")->getAllRegionHoliday()->groupByMonth()->get();`

`Holiday::init()->country("usa")->getAllRegionHoliday()->filterByMonth("January")->get();  //date('F')	`


### install

not complete yet
`composer require afiqiqmal/malaysiaholiday`


### Source
Scraped from - http://www.officeholidays.com/countries/malaysia

### MIT Licence

