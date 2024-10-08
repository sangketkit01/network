import puppeteer from "puppeteer";

async function registerFacebook(username,password,fname,lname,birthday,birthmonth,birthyear,sex) {
    const browser = await puppeteer.launch({
        headless: true,
        args: [
            "--no-sandbox",
            "--disable-setuid-sandbox",
            "--disable-infobars",
            "--window-size=1280,800",
        ],
    });
    const page = await browser.newPage();

    await page.goto("https://www.facebook.com/r.php");

    await page.type("input[name='firstname']", fname);
    await page.type("input[name='lastname']", lname);
    await page.type("input[name='reg_email__']", username); 
    await page.type("input[name=reg_passwd__]", password);

    await page.select("#day", birthday);
    await page.select("#month", birthmonth);
    await page.select("#year", birthyear);

    if (sex === "Male") {
        await page.click('input[value="2"]');
    } else if (sex === "Female") {
        await page.click('input[value="1"]');
    } else {
        await page.click('input[value="-1"]');
    }

    await page.click('button[name="websubmit"]');

    await page.waitForNavigation();

    const currentUrl = page.url();
    if (currentUrl.includes("checkpoint")) {
        console.log("Checkpoint page detected.");
    } else if (currentUrl.includes("r.php")) {
        console.log("Still on the registration page, registration failed.");
    } else {
        console.log("Registration Success");
    }

    await browser.close();
}


const args_register = process.argv.slice(2);
const username_register = args_register[0];
const password_register = args_register[1];
const fname = args_register[2];
const lname = args_register[3];
const birthday = args_register[4];
const birthmonth = args_register[5];
const birthyear = args_register[6];
const sex = args_register[7];

registerFacebook(username_register,password_register,fname,lname, birthday, birthmonth, birthyear, sex);