# 150 Points

## Creation
Cryptographic Failure Vuln
index.html has a robots.txt file, but the contents of that tell you to redirect to robots.html
where the disallowed page is shown. 
However hidden in the html is a hint to the crypto used in the authentification of the secret password.
When the user enters the wrong password in secretpage.php, it redirects to wrong.php which displays an error message in console.log that shows the encrypted password != to the encrypted password the user typed. Using the hint above, the user can reverse the encryption on the real password and log in to see the password.


## Challenge
`<ip-address:5670>`