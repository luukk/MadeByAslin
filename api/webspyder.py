import requests
from bs4 import BeautifulSoup


r = requests.get("https://www.gofundme.com/aslinzeeman")
r = requests.get("https://www.gofundme.com/aslinzeeman?utm_medium=wdgt")

soup = BeautifulSoup(r.content, 'html.parser')
target = soup.findAll("div", {"class": "raised"})
span = []
start = '</span>'
offset = '<span class="of">'
for x in target:
     test = span.append(str(x))

print span[0][span[0].find(start)+len(start) : span[0].find(offset)]