					/*	AUTHOR   : POOJA CHANDWADKAR
						COURSE : DATABASE DESIGN AND WEB DEVELOPEMENT
						MIDTERM PROJECT  */

DROP DATABASE IF EXISTS AerialFireFighting;
CREATE DATABASE AerialFireFighting;

USE AerialFireFighting;

#AvailableAircraft
DROP TABLE IF EXISTS AvailableAircraft;
CREATE TABLE AvailableAircraft(
ACID VARCHAR(20),
ACModel VARCHAR(20),
AFAssigned VARCHAR(20),
ACStatus ENUM('Ready','Not Ready'),
CONSTRAINT PK_AvailableAircraft PRIMARY KEY(ACID)
);


#Aircraft
DROP TABLE IF EXISTS Aircraft;
CREATE TABLE Aircraft(
ACModel VARCHAR(20),
ACType VARCHAR(20),
FlightSpeed INT,
FuelCapacity INT,
MissionRange INT,
WaterCapacity INT,
CONSTRAINT PK_Aircraft PRIMARY KEY(ACModel)
);


#Airfield
DROP TABLE IF EXISTS Airfield;
CREATE TABLE Airfield(
AFID VARCHAR(20),
Runways INT,
Hangers INT,
LOC_LAT INT,
LOC_LONG INT,
Image VARCHAR(20),
CONSTRAINT PK_Airfield PRIMARY KEY(AFID)
);

DROP TABLE IF EXISTS FireTarget;
CREATE TABLE FireTarget(
FireNumber INT(20) AUTO_INCREMENT,
FireID VARCHAR(20),
FireLocation VARCHAR(20),
FireStatus ENUM('Uncontained','Out','Contained'),
FireSize ENUM('Large','Medium','Small'),
CONSTRAINT PK_FireTarget PRIMARY KEY(FireNumber),
CONSTRAINT UK_FireTarget UNIQUE KEY(FireLocation)
);


DROP TABLE IF EXISTS Location;
CREATE TABLE Location(
LocationID VARCHAR(20),
Vegetation ENUM('Grass','Bush','Trees'),
Terrain ENUM('Flat','Hilly','Broken'),
LOC_LAT INT,
LOC_LONG INT,
CONSTRAINT PK_Location PRIMARY KEY(LocationID)
);

ALTER TABLE `availableaircraft`
ADD CONSTRAINT `availableaircraft_ibfk_1` FOREIGN KEY (`ACModel`) REFERENCES `aircraft` (`ACModel`),
ADD CONSTRAINT `availableaircraft_ibfk_2` FOREIGN KEY (`AFAssigned`) REFERENCES `airfield` (`AFID`);