# Welcome to Getflix

**The live site:** http://catflix.42web.io


## Contents

1. The project
2. Planning & Organisation
3. Timeline
4. Concept evolution
5. Resources
6. Acknowledgements
7. 
8. 
9.
10. 


## The project

this project is.... 

### Aim

The aim of this project is to.....

[Project challenge description](https://github.com/becodeorg/BXL-Swartz-3-21/blob/master/06-PHP/getflix_project.md)


### Features

#### Landing page

* **Sign Up** button leading to *Sign Up* page
* **Log in** button leading to *login* pages

#### Sign up page 

* Make a new account
* Password confirmation for security
* Password complexity for security
* Sign up for premium access
* A beautiful cat picture

#### Login page

* **Login** with *username* or *email*
* **Reset password**

#### Home page

* **Navigation bar** for ease of traversing through the site
 * **Log out** option, ending the session and returning to the *landing page*
* **Search bar** to search for videos or genres
* **6 categories** of videos for the user to browse
* A **sample of videos** for each category leading to the *video player page*
* **Footer section** with logo, sitemap and contact details

#### Results page

* View **all results** from the search

#### Video player page

* **Fully responsive** youtube streaming
* **Movie information** (description, year, rating)
* **Comments section** for *each* video


#### Other

* A fully functioning **database** hosting two tables of information
      * The videos per category
      * Comments for each video
      * User credentials
* Use of a **Session**
      * Log in and log out 


### Practices

#### Security

* Prepared statements with mysqli
* Password hashing 
* Password complexity
* Password confrimation (repeating the password entered)
* Limiting characters able to be sent to the database
* Passing entered data as a string so that it cannot be considered code
* Only letters can be considered for names
* Only letters and numbers can be considered for user names
* POST instead of GET requests

#### Design

* Mobile first approach


## Planning & Organisation

### Project team

* Nicolas Saeys
* Khadija El Khadri
* Mathieu Herbos
* Ashleigh Templeton

### Task management & project handling

The development team utilised scrum methodology to manage the project tasks. 
They used:
* Trello to manage the development process of key tasks;
* Figma to update the web design;
* Google docs to share resources, login details, notes, etc.;
* Discord for communication

A morning and afternoon meeting were held each day to ensure active communication on the progress of tasks and common understanding of the project's direction. Meetings were also held in the afternoon and when needed throughout the day between members and the group. 
Each team member was always connected to their discord vocal channel in case help or clarification was ever needed. 

Below is an example of a debrief defining the tasks for the next day:

![Debrief Wednesday first week](weddeb.jpg)


### Site Map

The site is constructed as follows:


* The user will arrive at the landing page
* They will then choose to either sign up or login
     * arrive at sign up page
     * arrive at login page
* From the signup or login page, they will be redirected to the main home page, from here there are multiple options
     * If logout selected
          * arrive at landing page
     * If search launched
          * arrive at results
               * If video selected
                    * arrive at streaming page
      * If category selected
          * arrive at category / filter page
               * If filtered
                    * arrive at results
          * if video selected
               * arrive at streaming page
     * If video selected
          * arrive at streaming page

![site-map](diagram_sitemap.jpg)

### Tools

##### Front End

* **Bootstrap** framework for *overall design*
* **Font Awesome** for *icons*
* **Owl** framework for the home.php *carousel*

## Timeline

### Proposed timeline

It was proposed that the must-have features of the site should be complete between Friday of the first ween and Tuesday of the second week. 
A preliminary merge of all completed work is planned for Monday of the second week. 

All main features should be completed by Wednesday end of day of the second week to leave Thursday and Friday of the second week to fix any outstanding issues, consolidate the last pieces of the styling, and review the Lighthouse score.

### Completed stages




## Concept evolution

### Early stages

We based the idea of our landing index page on the following concept:

![initial concept](landing_initial-concept.jpg)

As we decided on the "Cat" theme, a preliminary design for each page was formed using mainly bootstrap. With the base structure of these made, we were able to create and test our javascript, PHP and SQL code.

![index/landing page](index1.jpg)

![signup page](signup1.jpg)

![login page](login1.jpg)

![home page](home1-1.jpg)
![home page](home1-2.jpg)


*Inspiration for the design of this site was taken from Netflix*

In planning for the movie database table, as each row would contain multiple columns of information, excel was used for organisational purposes and then uploaded to the database via a csv file.

![movie db](moviedbexcel1.jpg)


### Mid project

TheMovieDB.org was implemented and tested in plain HTML:

![movie db api](moviedbapi.jpg)




### End project


### Final product



## Resources

### Tools

* Site and database hosting: [000webhostapp](https://getflixproject.000webhostapp.com/)
* Web design: [Figma](https://www.figma.com/file/SKbeGU18QARlioaiViQ1QC/Wireframing-in-Figma?node-id=0%3A1)
* Web design: [Bootstrap 4](https://getbootstrap.com/)
* Web design - icons: [Font Awesome](https://fontawesome.com/)
* Carousel: [Owl.Carousel.js](https://owlcarousel2.github.io/OwlCarousel2/)

### Planning

* [Google drive](https://drive.google.com/drive/folders/1a0ARVjYfVONoEEJ0cyo1g8SgQP3uow1h)
* [Google docs](https://docs.google.com/document/d/1zTGTB1Wex38f49HAybjMgSLT_Fui4-lMY2wOzgB0zfg/edit)
* [Trello](https://trello.com/b/7vgFR6nC/php-work)

### Images

* [Unsplash](https://unsplash.com/)

### Coding 

* [Signup/login system](https://www.youtube.com/watch?v=LC9GaXkdxF8)

### Youtube trailers for movie database

 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *

## Acknowledgements

We would like to thank..... 

