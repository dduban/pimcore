> Live demo: http://pimcore.pj.usermd.net/admin/

# Instructions for installation and configuration of the project

Here is a short user manual for installing, configuring and running the **Pimcore** project, including importing data and running the integration.


#Files

A chapter covering the preparation of project files.

## Prepare the environment

1. Make sure you have Docker installed on your system.
    
2. Copy the Pimcore and docker-compose project files to a selected location on your computer.

## Project Launch

1. Open a terminal or command prompt and navigate to the directory where the Pimcore project files and docker-compose file are located.
    
2. Start the Docker containers by typing the following command:
>docker-compose up -d

This command will launch Pimcore containers, databases, and other project components.
## Admin panel and data import

1. Once the containers have finished running, open a web browser and go to:
>http://localhost/admin
2. Log in to the Pimcore administration panel.
> admin:admin
3. In the administration panel, go to the "Datahub" section.
4. Use the prepared configurations to import data.
    
4. Start the data import process.

# SQL import

Make sure the database container is running. If it isn't, you can run it using Docker or another database management tool.

## Import Data from SQL File

1. Open a terminal or command prompt and navigate to the directory where the SQL file is located.
2. Use the appropriate command to import the data from the SQL file into the database.
>mysql -u username -p database_name < file.sql
