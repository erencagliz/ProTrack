# ProTrack

ProTrack is a comprehensive project and personnel management system designed to streamline sales tracking, team performance, and administrative tasks within organizations. Built with Laravel and a custom role management system, Trapp offers a powerful and intuitive interface for managing projects, sales, and human resources.

## Features

### **Sales Management**
- **My Sales:** View and manage your individual sales.
- **Team Sales:** Monitor the sales performance of your team.
- **All Sales:** Access a comprehensive view of all sales within the organization.
- **Add Sale (General):** Add new sales records accessible to all users.
- **Add Sale (Team Leaders):** Team leaders can add sales specifically for their team members.
- **Pending Sales (General):** View all pending sales across the organization.
- **Pending Sales (Team Leaders):** Team leaders can review and approve pending sales submitted by their team members.

### **Team & User Management**
- **Teams:** Create, manage, and organize different teams within the organization.
- **User List:** Manage the list of all system users.
- **User Group List:** Organize users into groups for better management and reporting.

### **Productivity & Performance**
- **Bonuses:** Track and manage bonuses for individuals and teams.
- **My Bonuses:** Personal dashboard to view your earned bonuses.
- **Targets:** Set and monitor sales targets for individuals and teams.
- **Breaks:** Manage and log break times for better productivity tracking.
- **Reports:** Generate detailed reports on sales, team performance, and productivity metrics.

### **Project & Office Management**
- **Projects:** Create and manage projects with assigned personnel.
- **Offices:** Manage office locations and related administrative details.
- **Files:** Upload, manage, and share documents relevant to projects and teams.
- **Permissions:** Manage access control with the custom role management system, defining roles and permissions for different user groups.

### **Calendar & Scheduling**
- **Calendar:** Plan and track important dates, deadlines, and events.

### **Human Resources Integration**
- **Human Resources:** Central hub for managing personnel data, with integrations from external platforms like Facebook Messenger, banners, and more.

### **Product & Inventory Management**
- **Products:** Manage the list of products being sold, track inventory, and sales data.

## Technology Stack
- **Backend:** Laravel Framework
- **Database:** MySQL
- **Custom Role Management System:** Built-in for flexible access control

## Installation & Setup

1. **Clone the Repository:**  
```bash
git clone https://github.com/your-repository/protrack.git
cd trapp
```

2. **Install Dependencies:**  
```bash
composer install
npm install && npm run dev
```

3. **Environment Setup:**  
Create a `.env` file based on `.env.example` and configure your database settings.

4. **Database Setup:**  
- Create a MySQL database named `trapp`.
- Import the provided `trapp.sql` file located in the project root directory:
```bash
mysql -u your_username -p protrack < protrack.sql
```

5. **Run Migrations (if needed):**  
```bash
php artisan migrate
```

6. **Serve the Application:**  
```bash
php artisan serve
```

## Custom Role Management
ProTrack features a custom role management system, allowing administrators to define roles and assign specific permissions to users. This flexible structure ensures secure and efficient access control tailored to organizational needs.

---

For any questions or support, feel free to reach out to the development team.

