-- Mask the totalSize value as it can have slight variability, causing test flakiness
--! qt:replace:/(\s+totalSize\s+)\S+(\s+)/$1#Masked#$2/
-- Mask random uuid
--! qt:replace:/(\s+'uuid'=')\S+('\s*)/$1#Masked#$2/

set hive.explain.user=false;

create table source(a int) stored by iceberg tblproperties ('format-version'='2') ;

insert into source values (1), (2);

create table target like source stored by iceberg;

show create table target;

select count(*) from target;

insert into target values (1), (2);

select a from target order by a;

delete from target where a=2;

select a from target order by a;

--create a partitioned iceberg table
create table emp_iceberg (id int) partitioned by (company string) stored by iceberg;

show create table emp_iceberg;

-- CTLT with the source as the partitioned iceberg table
create table emp_like1 like emp_iceberg stored by iceberg;

-- Partition column should be there
show create table emp_like1;

--create a partitioned non iceberg table
create table emp (id int) partitioned by (company string);

show create table emp;

-- CTLT with the source as the partitioned iceberg table
create table emp_like2 like emp stored by iceberg;

-- Partition column should be there
show create table emp_like2;

