create table mysmith.Alumnus(
uID CHAR(8) NOT NULL,
alumFName VARCHAR(20),
alumLName VARCHAR(20),
alumDOB DATE,
alumCity VARCHAR(20),
alumBatch CHAR(10),
alumEmail VARCHAR(50),
alumGender VARCHAR(15),
constraint pk_alumnus_uid primary key(uID)
);

create table mysmith.Company(
compID CHAR(10) NOT NULL,
compName VARCHAR(50),
compType VARCHAR(50),
constraint pk_company_compID primary key(compID)
);

create table mysmith.Project(
projID CHAR(10) NOT NULL,
projName VARCHAR(200),
projDesc VARCHAR(200),
projStartDate DATE,
projEndDate DATE,
constraint pk_project_projID primary key(projID)
);

create table mysmith.Event(
eventID CHAR(10) NOT NULL,
eventName VARCHAR(50),
eventDate DATE,
constraint pk_event_eventid primary key(eventID)
);

create table mysmith.Donate(
projID CHAR(10) NOT NULL,
uID CHAR(8) NOT NULL,
transID CHAR(10) NOT NULL,
donationAmount DECIMAL(10),
donationDate DATE,
constraint pk_donate primary key (projID,uID),
constraint fk_project_projid foreign key(projID)
references mysmith.project(projID)
on update cascade on delete no action,
constraint fk_alumnus_uid foreign key(uID)
references mysmith.alumnus(uID)
on update cascade on delete no action
);

create table mysmith.EventsAttendance(
uID CHAR(8) NOT NULL,
eventID CHAR(10) NOT NULL,
constraint pk_eventsattendance primary key(uID,eventID),
constraint fk_alumnus_euid foreign key(uID)
references mysmith.Alumnus(uID)
on update cascade on delete cascade,
constraint fk_event_eaeventid foreign key(eventID)
references mysmith.Event(eventID)
on update cascade on delete cascade
);

create table mysmith.Work(
uID CHAR(8) NOT NULL,
compID CHAR(10) NOT NULL,
workStartDate DATE,
workEndDate DATE,
workPosition CHAR(50),
workLoc CHAR(20),
workStatus varchar(10),
constraint pk_work primary key (uID,compID),
constraint fk_alumnus_wuid foreign key(uID)
references mysmith.Alumnus(uID)
on update cascade on delete cascade,
constraint fk_company_compid foreign key(compID)
references mysmith.Company(compID)
on update cascade on delete no action
);

create table mysmith.AlumnusSkill(
uID CHAR(8) NOT NULL,
skill VARCHAR(50) NOT NULL,
constraint pk_alumnusskill primary key (uID,skill),
constraint fk_alumnus_suid foreign key(uID)
references mysmith.Alumnus(uID)
on update cascade on delete cascade
);

create table mysmith.Certification(
certID CHAR(10) NOT NULL,
uID CHAR(8) NOT NULL,
certName CHAR(50),
expiryDate DATE,
constraint pk_certification_certid primary key(certID),
constraint fk_alumnus_cuid foreign key(uID)
references mysmith.Alumnus(uID)
on update cascade on delete cascade
);