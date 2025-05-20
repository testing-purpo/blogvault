# BlogVault – Web Challenge

**Difficulty:** Easy  
**Category:** Web  
**Author:** spyuser

## Description

A beginner-friendly CTF challenge involving SQL Injection and Local File Inclusion (LFI). Players must bypass login as an admin and later exploit a vulnerable file include to retrieve a flag.

## Features

- PHP-based frontend
- MySQL backend
- SQL Injection in login
- Local File Inclusion in dashboard
- Fully Dockerized

## Setup Instructions

```bash
git clone https://github.com/yourusername/BlogVault.git
cd BlogVault
docker-compose up --build
