# 🕵️ OAuth Bypass Vulnerable Lab

![Docker Pulls](https://img.shields.io/docker/pulls/hacksudo/oauthlab?color=green&label=Docker%20Pulls&style=for-the-badge)
![GitHub Repo stars](https://img.shields.io/github/stars/hacksudo/oauthlab?color=yellow&style=for-the-badge)
![License](https://img.shields.io/badge/license-MIT-blue?style=for-the-badge)

A deliberately vulnerable **OAuth 2.0 + JWT** lab designed for **penetration testers**, **bug bounty hunters**, and **CTF players**.  
This lab demonstrates how an attacker can bypass authentication using **JWT alg=none** and insecure OAuth flows.

---

## 📸 Screenshots

> *(Replace with your actual screenshots later)*  

### Login Page
![Login Page](<img width="1600" height="680" alt="1" src="https://github.com/user-attachments/assets/1af4df01-4253-4436-9d4d-8570eba8b268" />)


### Dashboard
![Dashboard](<img width="1600" height="706" alt="2" src="https://github.com/user-attachments/assets/2dc65de4-718a-4d81-aaae-b73a8fd31e83" />)

---

## 🚀 Quick Start

Run this lab with Docker in seconds:

```bash
docker run -d -p 8080:80 hacksudo/oauthlab:latest
```
Open in your browser:
http://localhost:8080/

##Expected Flag
```bash
Welcome, hacker
Your role: admin
🎉 FLAG: oauth_bypass_success_123 🎉
```

🌐 Deploying on Apache2 (Local or VM)

Follow these steps if you want to deploy the lab without Docker, directly using Apache2 + PHP.
📌 Step 1: Install Apache2 & PHP

sudo apt update
sudo apt install apache2 php libapache2-mod-php php-curl -y

Enable Apache on startup:

sudo systemctl enable apache2
sudo systemctl start apache2

📌 Step 2: Clone the Repository

cd /var/www/html
sudo rm -rf *
sudo git clone https://github.com/hacksudo/oauthlab.git .

(the . at the end puts files directly into /var/www/html)
📌 Step 3: Fix Permissions

sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html

📌 Step 5: Access the Lab

Open in your browser:

http://<your-server-ip>/

    Example: http://127.0.0.1/ or http://192.168.1.100/

###Development
##Build Locally
```bash
git clone https://github.com/hacksudo/oauthlab.git
cd oauthlab
docker build -t oauthlab .
docker run -d -p 8080:80 oauthlab
```

##📚Learning Objectives

    Understand OAuth 2.0 authorization code flow

    Explore JWT vulnerabilities (alg: none)

    Practice Burp Suite exploitation

    Learn session hijacking and insecure token storage

    ##👨‍💻 Author

Hacksudo
Security Researcher | CTF Builder | Developer

##⭐ Contribute

If you find this project useful, please:

    ⭐ Star the repo

    🐛 Report issues

    🔀 Submit pull requests


    ## License
---

This `README.md` is **big and professional** — includes:

- Badges (Docker pulls, stars, license)  
- Screenshots placeholders  
- Project structure  
- Setup & exploitation steps  
- Learning objectives  
- Contribution & License  

---

⚡ Do you want me to also create a **docs/** folder with sample screenshots (matrix login & neon dashboard) so you can commit them to GitHub for a complete visual README?

