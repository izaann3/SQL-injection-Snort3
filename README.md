# SQL Injection Detection with Snort3 and Apache

<p align="center">
  <img src="https://www.sakurasky.com/images/blog/snort-logo.png" width="10%" />
  <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Virtualbox_logo.png" width="5%" />
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Apache_HTTP_server_logo_%282019-present%29.svg/2560px-Apache_HTTP_server_logo_%282019-present%29.svg.png" width="10%" />
  <img src="https://openexpoeurope.com/wp-content/uploads/2018/04/MySQL-clr.png" width="10%" />
</p>

## Project Summary

This project implements an Intrusion Detection System (IDS) using **Snort3** to detect SQL injection attacks on a simple **Apache**-hosted website. The goal is to create a custom Snort3 rule to monitor HTTP requests for suspicious patterns, such as the `id=` parameter commonly used in SQL injections.

To make the system testable, a **VirtualBox** VM was configured to forward ports and allow access to the web page from any device in the local network. A basic **MySQL** database with user data was also set up for simulating SQL injection attacks.

When a potential SQL injection is detected, **Snort3** generates an alert, which is logged for further review. The project demonstrates how Snort3 can be used as an IDS for web applications, providing protection against SQL injection vulnerabilities.

---

## Technologies Used

- **Snort3** for intrusion detection
- **Apache2** for hosting the web server
- **MySQL** for database management
- **PHP** for the web application
- **VirtualBox** for VM setup and port forwarding
- **tcpdump** for network traffic analysis

---

## Key Features

- Detects SQL injection attempts using a custom Snort3 rule.
- Sets up a web server and database for testing SQL injection.
- Configures **VirtualBox** for network accessibility.
- Logs detected SQL injection attempts in Snort3 alerts.
