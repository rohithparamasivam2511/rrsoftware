# Vercel Deployment Guide - RR Software Solutions

Follow these steps to host your website on Vercel for free and connect a professional domain.

## Step 1: Prepare Your Folder
Your website files are located in `D:\RR soft`. Ensure you have the following files:
- `index.html`
- `style.css`
- `script.js`
- `privacy-policy.html`
- `terms-of-service.html`
- `assets/` (folder with images)

## Step 2: Deploy to Vercel
There are two ways to deploy:

### Option A: Using Vercel CLI (Recommended if you have Node.js)
1. Install Vercel CLI: `npm i -g vercel`
2. Open terminal in your project folder.
3. Run: `vercel`
4. Follow the prompts to deploy.

### Option B: Using GitHub (Best for long-term)
1. Create a repository on [GitHub](https://github.com) (e.g., `rr-software-solutions`).
2. Upload your files to this repository.
3. Go to [Vercel](https://vercel.com) and click **"Add New" > "Project"**.
4. Import your GitHub repository.
5. Click **"Deploy"**.

## Step 3: Add a Custom Domain (Critical for Meta)
Once deployed, Vercel will give you a link like `rr-software.vercel.app`. **Do not use this for Meta verification.**

1. Purchase a domain from **GoDaddy**, **Namecheap**, or **Hostinger** (Example: `rrsoftwaresolutions.in`).
2. In Vercel, go to your **Project Settings > Domains**.
3. Type your new domain and click **Add**.
4. Vercel will give you **DNS Records** (A and CNAME).
5. Log in to your domain provider's dashboard and copy these DNS records there.
6. Wait 30-60 minutes for the domain to become active.

## Step 4: Verify SSL
Vercel automatically provides an SSL certificate (HTTPS), which is required for Meta verification. Ensure your URL starts with `https://`.
