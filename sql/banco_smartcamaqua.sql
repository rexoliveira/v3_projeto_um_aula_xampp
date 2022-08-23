--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Ubuntu 14.4-1.pgdg20.04+1)
-- Dumped by pg_dump version 14.4

-- Started on 2022-08-22 23:09:08

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 6 (class 2615 OID 18734788)
-- Name: heroku_ext; Type: SCHEMA; Schema: -; Owner: udac9c4bp2oq06
--

CREATE SCHEMA heroku_ext;


ALTER SCHEMA heroku_ext OWNER TO udac9c4bp2oq06;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 210 (class 1259 OID 18743446)
-- Name: usuario; Type: TABLE; Schema: public; Owner: skmpjtptrfsukp
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    tel character varying(15) NOT NULL,
    password character varying(1000) NOT NULL
);


ALTER TABLE public.usuario OWNER TO skmpjtptrfsukp;

--
-- TOC entry 211 (class 1259 OID 18743467)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: skmpjtptrfsukp
--

CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO skmpjtptrfsukp;

--
-- TOC entry 4306 (class 0 OID 0)
-- Dependencies: 211
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: skmpjtptrfsukp
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 4152 (class 2604 OID 18743800)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: skmpjtptrfsukp
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 4296 (class 0 OID 18743446)
-- Dependencies: 210
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: skmpjtptrfsukp
--

INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (42, 'May Adams', 'nisl.nulla.eu@google.org', '(03) 3436 2331', '3218');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (43, 'Harding Velasquez', 'cras.convallis@yahoo.com', '(02) 4135 7948', '7683');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (44, 'Wynne Waller', 'elit.pharetra.ut@outlook.org', '(04) 3397 4905', '5473');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (45, 'Cally Marsh', 'nulla.donec@yahoo.edu', '(04) 4572 1416', '9927');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (46, 'Lee Estes', 'dolor.fusce@protonmail.org', '(03) 3343 8533', '3283');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (47, 'Audra Johnson', 'faucibus.leo@google.edu', '(07) 8996 4274', '5565');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (48, 'Fallon Bernard', 'suspendisse.commodo.tincidunt@google.com', '(04) 4486 6512', '2612');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (49, 'Kenyon Mcfarland', 'aliquam@icloud.edu', '(08) 1277 2661', '4766');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (50, 'Christian Rocha', 'aliquam.auctor@yahoo.net', '(04) 6533 8521', '5214');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (51, 'Clark Patton', 'vel@google.com', '(05) 2995 4417', '7122');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (41, 'Maxine West', 'facilisis.magna@protonmailacademicoifsuledu.edu', '(08) 7664 2153', '1532');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (52, 'Camille Roman', 'nascetur.ridiculus.mus@icloud.net', '(01) 1413 3941', '3076');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (53, 'Bo Blake', 'nisl.maecenas@academicoifsul.com', '(05) 7369 2162', '1461');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (54, 'Maryam Franklin', 'quisque.nonummy@hotmail.org', '(05) 1048 3228', '4405');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (55, 'Amir Walter', 'sollicitudin.commodo@academicoifsul.net', '(08) 6754 3328', '8311');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (56, 'Jessamine Miles', 'elit.a.feugiat@outlook.edu', '(03) 6527 2672', '3749');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (57, 'Jasper Ortiz', 'justo.sit.amet@yahoo.net', '(08) 6421 0227', '4924');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (58, 'Kaye Park', 'fringilla.ornare.placerat@academicoifsul.edu', '(04) 7122 2764', '2577');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (59, 'Macey Whitley', 'malesuada.fringilla@hotmail.edu', '(03) 7622 3436', '7283');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (60, 'Martena Knox', 'cursus.et.magna@google.com', '(04) 6638 3643', '1420');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (61, 'Damian Mitchell', 'lacus.quisque@hotmail.net', '(07) 4225 5224', '5833');


--
-- TOC entry 4307 (class 0 OID 0)
-- Dependencies: 211
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: skmpjtptrfsukp
--

SELECT pg_catalog.setval('public.usuario_id_seq', 61, true);


--
-- TOC entry 4154 (class 2606 OID 18743745)
-- Name: usuario usuario_email_key; Type: CONSTRAINT; Schema: public; Owner: skmpjtptrfsukp
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);


--
-- TOC entry 4156 (class 2606 OID 18743768)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: skmpjtptrfsukp
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- TOC entry 4303 (class 0 OID 0)
-- Dependencies: 6
-- Name: SCHEMA heroku_ext; Type: ACL; Schema: -; Owner: udac9c4bp2oq06
--

GRANT USAGE ON SCHEMA heroku_ext TO skmpjtptrfsukp;


--
-- TOC entry 4304 (class 0 OID 0)
-- Dependencies: 5
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: skmpjtptrfsukp
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO skmpjtptrfsukp;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- TOC entry 4305 (class 0 OID 0)
-- Dependencies: 827
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO skmpjtptrfsukp;


-- Completed on 2022-08-22 23:09:19

--
-- PostgreSQL database dump complete
--

