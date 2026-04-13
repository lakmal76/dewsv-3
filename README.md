# dewsv-3
loan information system
A secure and scalable Loan Information Management System developed using AppGini (PHP & MySQL). This system is designed to efficiently manage loan applications, repayments, and financial tracking with a user-friendly web interface.
Features
📄 Loan Application Management
Create, update, and track loan applications
Unique loan reference number generation
💰 Loan Repayment Tracking
Record installment payments
👥 User Role Management
Admin and user-level access control (AppGini built-in)
🔍 Advanced Search & Filtering
Quickly locate loan records and repayment history
Generate printable loan summaries and reports
🔐 Secure Authentication
AppGini authentication system integration
🏗️ Technology Stack
Backend: PHP (AppGini Framework)
Database: MySQL
Frontend: HTML, CSS (Custom UI enhancements)
Platform: Web-based (Mobile compatible)
🗂️ Database Structure (Core Tables)
1. Loan_application
Loan_ap_number (Primary Key)
2. Loan_repayment
Loan_application (Foreign Key)
installment_Amount
⚙️ Key Functionality
Relationship between loan and repayments ensures accurate financial tracking
