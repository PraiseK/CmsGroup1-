# Deployment Documentation

This document outlines the deployment workflow for the WordPress website developed for Suite Consultants by Group 1. The deployment process involves setting up the development environment and deployment workflow, version control, testing, and the migration of the website from a local server to an online server. Follow these steps to successfully develop theme updates locally, test them, and deploy to staging and live sites.

## Development Environment

### Local Environment Setup:

1. **XAMPP Configuration:**
   - Utilize XAMPP 8.2.4 for local development.
   - Configure MySQL, Apache, and ProFTPD for the local server environment.

2. **WordPress Installation:**
   - Install WordPress 6.4.1 for content management on the local environment.
   - Use phpMyAdmin for efficient database control.

     
## Development Workflow

### 1. Clone the Repository

Clone the project repository to your local machine.

- For feature development or editing/updating existing features, create a new branch in the repository, appropriately named for version control. Log new developments, edits, and updates on the Trello board as well as Slack. 

- Customize the theme in the relevant Integrated Development Environment (IDE), making version control commits. Push the completed work to the repository and create relevant pull requests to the main branch. Ensure that pull requests are tested before merging into the main branch.


### 2. Development and Commits

Make necessary changes to the codebase. Commit regularly with clear and concise messages.

 Once the main branch is merged and updated with changes, pull the repository to the local environment. Upload it as a zip file to the staging site through appearance/theme/add new and activate it to test on the staging website. After successful testing, upload the theme zip folder to the production site.

### 3. Push Changes

Push your branch to the remote repository. 


### 4. Pull Request

Create a pull request on the GitHub repository. Assign reviewers and ensure that the changes pass code review.


### 5. Testing:

1. **Theme Check:**
   - Use Theme Check plugins to ensure the custom theme follows WordPress standards.
   - Perform testing on a new/dummy site to validate correct implementation.

2. **Plugin Integration Testing:**
   - Integrate and test all plugins such as WPForms, News & Blog Designer Pack, WP Vivid Backup, and Ultimate Social Media Icons.
   - Ensure proper functionality and customization of each plugin.

## Deployment Workflow

### 6. Live Deployment: Website Hosting

when staging testing was successful, we deployed the changes to the live production environment. We used Pantheon as our hosting platform. Of all the other hosts we had considered it ended up being the winnig site because:
1. **Performance and Scaling:**
   - Pantheon ensures high performance and automatic scaling for handling varying levels of website traffic.

2. **Integrated Development Workflow:**
   - Offers a streamlined development process with version control integration and multiple environments (Dev, Test, Live).

3. **Security Features:**
   - Implements security best practices, automatic backups, and SSL management to enhance website security.

4. **Global CDN Integration:**
   - Improves website loading speed by integrating a Content Delivery Network (CDN).

5. **Scalable Hosting Plans:**
   - Provides hosting plans suitable for various needs, with dynamic resource scaling.

6. **Collaborative Tools:**
   - Includes team-based permissions and workflows to facilitate efficient collaboration among development teams.

7. **Support and Documentation:**
   - Offers support options and comprehensive documentation for troubleshooting and utilizing platform features.

It also provided us with a free hosted site that would be available the time we needed our website to be deployed.

### 7. Version Control
The utilization of GitHub's version control enables us to monitor, manage, and compare both old and new versions of the code committed by each team member to the repository. However, in this assignment, we have not employed GitHub version control until today. Instead, we incrementally updated the website and modified documentation files on GitHub as required. On the final day of submission, our plan is to convene and review any necessary changes to our existing work. We have allocated a single day to compile all our learning journal entries to submit the comprehensive file. 

### 9. Content Management

**Content Modification:**
   - Modify and enhance client-provided content to align with the website goals.
   - Develop new content as needed, adhering to legal requirements for commercial use.
  
### 8. Project Management
to facilitate effective communication, we used three platforms as well as a Github reprisotory to share all necessary documentation and more. To do so, we used:
1. **[Trello](https://trello.com/b/4zz6bndF/cp3402-2023-group1)** - The card-based system allowed for easy task tracking, assigning responsibilities, and progress monitoring. The intuitive drag-and-drop interface enhanced usability, making it accessible for all team members. Trello's real-time updates and notifications keep everyone informed about changes and developments within the project. The platform's flexibility accommodated various project structures, while its integration with other tools and platforms streamlines workflow. 

2. **[Slack](https://app.slack.com/client/T06434CVC03/C063WHYJ2CW)** - Although this was our least ued communication platform, it offered an intuitive chat interface which facilitates quick messaging and file sharing, promoting seamless communication among team members. The channel structure allows for organized discussions, while features like threads and mentions enhance clarity and engagement

3. **[Github Repository](https://github.com/PraiseK/CmsGroup1-/tree/main)** - GitHub repository served as a crucial platform for effective collaboration in the website development project. Its version control system allowed for meticulous tracking, management, and comparison of code changes made by individual team members. GitHub's branching and merging capabilities facilitated parallel development efforts, ensuring a streamlined workflow. The platform's issue tracking, pull request, and code review features contribute to a robust and collaborative development process. 





