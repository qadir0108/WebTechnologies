CREATE TABLE public.admissions
(
    rollno numeric,
    name character varying,
    marks numeric,
    gender character varying,
    class character varying,
    pass character varying,
    info character varying
);

ALTER TABLE public.admissions
    OWNER to postgres;
	
select * from admissions;

delete from admissions
