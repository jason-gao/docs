+   http://www.ruanyifeng.com/blog/2013/12/getting_started_with_postgresql.html
+   https://wiki.postgresql.org/wiki/First_steps

1. su - postgres
2. help
3. CREATE SCHEMA test;
4. CREATE USER jasong PASSWORD 'yundun';
5. GRANT ALL ON SCHEMA test TO jasong;
6. GRANT ALL ON ALL TABLES IN SCHEMA test TO jasong;
7. CREATE TABLE test.test (coltest varchar(20));
8. insert into test.test (coltest) values ('It works!');
9. SELECT * from test.test;


