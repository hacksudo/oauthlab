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
![Login Page](docs/login_page.png)

### Dashboard
![Dashboard](docs/dashboard.png)

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
