import puppeteer from "puppeteer";


async function loginFacebook(username, password) {
    const browser = await puppeteer.launch({
        headless: true,
	    executablePath: '/usr/bin/chromium',
        args: [
            "--no-sandbox",
            "--disable-setuid-sandbox",
            "--disable-infobars",
            "--window-size=1280,800",
        ],
    });
    const page = await browser.newPage();

    await page.goto("https://www.facebook.com/login");

    if (typeof username !== "string") username = String(username);
    if (typeof password !== "string") password = String(password);

    await page.type("#email", username);
    await page.type("#pass", password);

    await page.click('button[name="login"]');

    await page.waitForNavigation();

    const currentUrl = page.url();
     if (currentUrl.includes("checkpoint")) {
         console.log("Checkpoint page detected.");
     } else if (currentUrl.includes("login")) {
         console.log("Still on the login page, login failed.");
     } else {
         console.log("Login Success");
     }

    await browser.close();
}

const args = process.argv.slice(2);
const username = args[0];
const password = args[1];

loginFacebook(username, password);


