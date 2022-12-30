
def points_pages():#facilitator for the individual challenge html pages
    points = [100,200,300,400,500]
    cats = ['Crypto', 'Forensics', 'Linux', 'OSINT', 'Web', 'Misc']
    jep = {}
    for i in cats: #creates the jeapordy dictionary
        jep[i]=points
    
    for k,v in jep.items():
        for i in v:
            cfile = f'CTF-WebApp/Table/{k}-{i}.html'
            with open(cfile, 'w') as file:
                file.write(f"<!DOCTYPE html>\n")#Note: Create html page here
                file.write("<html>\n")
                file.write(f"<title>{k}: {i}</title><head><h1 font-size=\"20px\">{k}: {i} Points</h1></head>\n")
                
                file.write("<body>\n")
                file.write("<h4>Description:  </h4>\n")
                file.write("<a href=\"l\"> input link to challenge</a>\n")
                file.write("<p>Flag format is: PING{xxxxxxxx}<br>\n Go back to index.html to submit\n</p>\n")
                file.write("</body>\n")
                file.write("</html>\n")

points_pages()