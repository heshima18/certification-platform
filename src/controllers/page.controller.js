import fs from "fs";
import  render  from "./page.scraper.controller";
import  path  from "path";
let page = (req,res)=>{
	const { filename } = req.params;
    let file
    switch (filename) {
        case '':
            file = path.join(__dirname,'..','pages', 'demo','client','index.html')
            break;
        case '404/':
            file = path.join(__dirname,'..','pages', '404.html')
            break;
        case 'myAccount/':
            file = path.join(__dirname,'..','pages','demo','client', 'app-user-view-account.html') 
            break;
        case 'app/':
            file = path.join(__dirname,'..','pages', 'dashboard.html') 
            break;
        case 'login/':
            file = path.join(__dirname,'..','pages','demo', 'auth-login.html') 
            break;
        case 'myApplications/':
            file = path.join(__dirname,'..','pages','demo','client', 'my-applications.html') 
            break;
        case 'pendingApplications/':
            file = path.join(__dirname,'..','pages','demo','client', 'pending-applications.html') 
            break;
        case 'approvedApplications/':
            file = path.join(__dirname,'..','pages','demo','client', 'approved-applications.html') 
            break;
        case 'declinedApplications/':
            file = path.join(__dirname,'..','pages','demo','client', 'declined-applications.html') 
            break;
        case 'addFacility/':
            file = path.join(__dirname,'..','pages','demo','client', 'add-facility.html') 
            break;
        case 'auth/':
            file = path.join(__dirname,'..','pages','demo', 'auth-two-steps.html') 
            break;
        case 'addFeedback/':
            file = path.join(__dirname,'..','pages','demo','client', 'add-feedback.html') 
            break;
        case 'myFacilities/':
            file = path.join(__dirname,'..','pages','demo','client', 'my-facilities.html') 
            break;
        case 'myFeedbacks/':
            file = path.join(__dirname,'..','pages','demo','client', 'my-feedbacks.html') 
            break;
        case 'signup/':
            file = path.join(__dirname,'..','pages','demo', 'auth-register.html') 
            break;
        case 'addApplication/':
            file = path.join(__dirname,'..','pages','demo','client', 'add-application.html') 
            break;
        case 'forgotpassword/':
            file = path.join(__dirname,'..','pages','demo', 'auth-forgot-password.html') 
            break;
        case 'resetPassword/':
            file = path.join(__dirname,'..','pages','demo', 'auth-reset-password.html') 
            break;
        default:
                file = 'N/A'
            break;
    }
    fs.readFile(file, (err, data) => {
        if (err) {
            file = path.join(__dirname,'..','pages', '404.html')
            fs.readFile(file, (err, errorPageData) => {
                if (err) {
                    console.log(err)
                  res.status(500).send('Internal Server Error');
                  return;
                }
        
                res.writeHead(404, {
                  'Content-Type': 'text/html',
                  'Content-Length': errorPageData.length
                });
                res.end(errorPageData);
            })
            return 0;
        }
        res.writeHead(200, {
            'Content-Type': "text/html",
            'Content-Length': data.length
        });
        // data = render(data)
        res.end(data);
    });
}
export default page
