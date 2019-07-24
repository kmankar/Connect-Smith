SELECT eventName, alumFName, alumLName, alumEmail FROM Event e 
JOIN eventsattendance ea ON e.eventID=ea.eventID
JOIN Alumnus a ON a.uID=ea.uID
WHERE eventDate < CURRENT_DATE();

SELECT eventName, alumFName, alumLName, alumEmail FROM Event e
JOIN eventsattendance ea ON e.eventID=ea.eventID
JOIN Alumnus a ON a.uID=ea.uID
WHERE eventDate > CURRENT_DATE();


SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where compName LIKE 'Deloitte LLP' and workPosition LIKE'Jr Data Analyst';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =2014 and workPosition LIKE 'Jr Data Analyst';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch = 2014 and compName LIKE'Deloitte LLP';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch = 2016;

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where compName LIKE 'EY';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where workPosition LIKE 'Associate';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where compName LIKE 'Deloitte LLP' and alumBatch = 2014 and workPosition LIKE 'Jr Data Analyst';

SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID;

Select alumFName,alumLName,alumEmail,alumGender,projName,projDesc,donationAmount from alumnus a 
join donate d ON d.uID = a.uID 
join project p ON p.projID =d.projID 
WHERE projName LIKE 'Smith Alumni Management'
order by alumLName,alumFName;

select certName, COUNT(c.certName) AS 'number' 
from Certification c
Group by certName
order by certName;
