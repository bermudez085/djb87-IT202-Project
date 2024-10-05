--Name: Daniel Bermudez
--Date: 10/4/2024
-- Course Name and Section : IT-202-005
-- Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
CREATE TABLE GourmetFoodsManagers (
    GourmetManagerID     INT(11)        NOT NULL   
    AUTO_INCREMENT,
    emailAddress         VARCHAR(255)   NOT NULL   
    UNIQUE,
    password             VARCHAR(64)    NOT NULL,
    pronouns             VARCHAR(60)    NOT NULL,
    firstName            VARCHAR(60)    NOT NULL,
    lastName             VARCHAR(60)    NOT NULL,
    dateCreated          DATETIME       NOT NULL,
    PRIMARY KEY (GourmetManagerID)
);
INSERT INTO GourmetFoodsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('christian@gmail.com', SHA2('christians', 256), 'He/Him', 'Christian', 'Bermudez', NOW());

INSERT INTO GourmetFoodsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('jose@gmail.com', SHA2('joses', 256), 'He/Him', 'Jose', 'Jones', NOW());

INSERT INTO GourmetFoodsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('daniel@gmail.com', SHA2('daniels', 256), 'He/Him', 'Daniel', 'Smith', NOW());