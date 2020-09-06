Statistical Analysis of Lake Pend Oreille - JavaScript Solution

Lake Pend Orielle is the deepest lake in USA, so deep that US Navy uses it to test submaries.

In this project we perform statistical analysis on the available data to plot the Barometric Pressure  of the lake at different instants of time.Then the Coefficient of the slope is found, this is an important factor in determining the weather of the next day : If slope is negative : It would be a COld/Rainy day. If sloope is positive : It would be SUnny.

The data is collected by US Navy and can be found at : The dataset can be found at - http://lpo.dt.navy.mil/

The code here, generates a plot of Barometric pressure against 'From' and 'To date' and also computes the coefficient of the slope.
The code is in JS, HTML, CSS and the Database operations are in PHP.
SQLite DB file is included as PondDb.db and the data is loaded in the table - tbl_pond_data.

For Visualization, C3.JS Javascript library is used. It is a D3.JS based reusable chart library.
For date-time formatting, Moment.js is used.
For UI, Bootstrap is used.
