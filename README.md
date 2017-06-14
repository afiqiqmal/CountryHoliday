
# List of Country Holiday
get holiday list from selected country 


### Usage

Holidays in current years

<pre>
Holiday::init()->country("malaysia")->getAllRegionHoliday()->get();
</pre>

Holidays in specific years

<pre>
Holiday::init()->country("malaysia")->getAllRegionHoliday("2017")->get();
</pre>

Holidays by regional

<pre>
Holiday::init()->country("uae")->getRegionHoliday("Selangor")->get();
</pre>

Holidays by regional in 2017

<pre>
Holiday::init()->country("usa")->getRegionHoliday("arizona","2017")->get();
</pre>


Grouping and Filter result

<pre>
Holiday::init()->country("india")->getAllRegionHoliday()->groupByMonth()->get();
Holiday::init()->country("malaysia")->getAllRegionHoliday()->filterByMonth("January")->get();  //date('F')
</pre>


### install

<pre>
composer require afiqiqmal/countryholiday
</pre>

Or

<pre>
require{
	"afiqiqmal/countryholiday": "^1.0.0"
}
</pre>


### Source
Scraped from - http://www.officeholidays.com/countries/malaysia

### MIT Licence

