# Rental Properties Website

A full-stack rental property website built while learning front-end development and relational databases. This project combines HTML, CSS, PHP, and MySQL to create a locally hosted web application for browsing rental properties and interacting with rental group data.

## Overview

This project was designed to explore how a database-backed website works end to end:

- Build a multi-page frontend website
- Connect PHP to a MySQL database
- Design and implement a relational schema
- Query and display dynamic data
- Support simple user workflows such as viewing rental groups and updating preferences

The site is themed around a fictional rental company serving students and renter groups.

## Tech Stack

- Frontend: HTML, CSS  
- Backend: PHP  
- Database: MySQL  
- Database Access: PDO  
- Environment: XAMPP / Localhost  

## Features

### Multi-page website
- Landing page
- About page
- Properties page
- Rental groups page

### Database-driven functionality
- Select rental groups from database
- Display group members dynamically
- Render renter and group data using SQL queries
- Update rental preferences via forms

### Relational database design
The schema models real-world rental relationships:

- People
- Property
- PropertyManager
- RentalGroup
- Owner
- Renter
- Room
- Apartment
- House
- Ownership relationships

### Frontend
- Static HTML pages
- Shared styling via CSS

### Backend
- PHP connects to MySQL using PDO
- Queries retrieve and display dynamic content
- Form submissions trigger backend logic
  
- PHP handles:
  - database connection
  - form processing
  - query execution
  - rendering results

### Database
- MySQL relational schema
- Foreign key relationships
- Normalized structure
- Supports multiple property types and user roles
