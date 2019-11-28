Create table Doctor_Detail(
    D_Ssn varchar(25) not null primary key,
    D_Name varchar(25) not null,
    Gender varchar(6),
    Position  varchar(15),
    Phone varchar(10),
    Office varchar(100),
    Address varchar(100),
    city varchar(15),
    Zip int(6)
    )ENGINE = INNODB;  
    create table Beneficiary(
    ssn varchar(25) not null primary key,
    name varchar(25),
    position varchar(25),
    gender varchar(10),
    DOB date,
    address varchar(100),
    city varchar(100),
    pincode int(6)
    )ENGINE = INNODB;
    create table patient_entry(
    patient_no int(3) not null auto_increment primary key, 
    P_Ssn  varchar(25),
    D_Ssn varchar(25),
    Age int(3),
    visit_date date,  
    foreign key(P_Ssn) references Beneficiary(ssn),
    foreign key(D_Ssn) references Doctor_Detail(D_Ssn)
    )ENGINE = INNODB;

    create table medicines(
     m_name varchar(25) not null primary key, 
     price decimal(8,2),
     in_stock int(3)
     )ENGINE = INNODB;
     
    
    create table Prescription(
    p_no int(3) not null,
    drug_name varchar(25) not null,
    quantity int(3),
    primary key(p_no,drug_name),
    foreign key(p_no) references patient_entry(patient_no),
    foreign key(drug_name) references medicines(m_name)
     ) ENGINE = INNODB;
     
     
     create trigger medicine_quantity 
after insert on prescription
for each ROW
update medicines
SET in_stock = in_stock-new.quantity
where m_name=new.drug_name;

