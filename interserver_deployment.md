# InterServer Deployment Guide - RR Software Solutions

Since you are using your friend's InterServer account, follow these steps to host your redesigned "Indian Corporate" website.

## Prerequisites
- Access to the **InterServer cPanel** login (Username and Password).
- Your domain name (e.g., `rrsoftwaresolutions.in`) pointed to InterServer's Nameservers.

## Step 1: Login to cPanel
1. Go to `https://yourdomain.com:2083` or use the login link provided by InterServer.
2. Enter your credentials.

## Step 2: Open File Manager
1. Look for the **"Files"** section.
2. Click on **"File Manager"**.
3. In the left sidebar, click on **`public_html`**. This is where your website files MUST go.

## Step 3: Upload Your Files
1. In the `public_html` folder, click the **"Upload"** button at the top.
2. Select and upload the following files from `D:\RR soft`:
   - `index.html`
   - `style.css`
   - `script.js`
   - `contact.php` (Mandatory for the form to work)
   - `privacy-policy.html`
   - `terms-of-service.html`
3. Create a new folder named `assets` inside `public_html`.
4. Inside the `assets` folder, upload:
   - `hero.png`
   - `mobile.png`
   - `erp.png`
   - `web.png`

## Step 4: Connecting the Custom Domain
If your domain is not yet pointing to InterServer:
1. Log in to your domain registrar (GoDaddy, Namecheap, etc.).
2. Update the **Nameservers** (NS) to what InterServer provided:
   - Usually: `cdns1.interserver.net` and `cdns2.interserver.net`.
3. Wait 4–24 hours for propagation.

## Step 5: Test the Contact Form
1. Go to your live website.
2. Scroll to the "Contact" section and send a test message.
3. Check your friend's email (or yours as configured in `contact.php`) to ensure it's working.

## Step 6: SSL (HTTPS) - Mandatory for Meta
1. In cPanel, look for **"SSL/TLS Status"**.
2. Run **"AutoSSL"** to get a free certificate.
3. Your site should now show a green padlock (HTTPS).
