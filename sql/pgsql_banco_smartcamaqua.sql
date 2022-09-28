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

CREATE DATABASE d8r7j0jch56qj4 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'pt_BR.UTF-8';



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
    password character varying(1000) NOT NULL,
    foto character varying(255),
    criado_em timestamp without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


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

INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (1, 'Selecione detalhes do CARD, botão inferior direito', '', '( )          ', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:31.584794');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (2, 'Harding Velasquez', 'cras.convallis@yahoo.com', '(02) 14135-7948', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:32.007534');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (3, 'May Adams', 'nisl.nulla.eu@google.org', '(03) 13436-2331', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:32.430603');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (4, 'Wynne Waller', 'elit.pharetra.ut@outlook.org', '(04) 13397-4905', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:32.853803');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (5, 'Cally Marsh', 'nulla.donec@yahoo.edu', '(04) 14572-1416', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:33.277064');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (6, 'Lee Estes', 'dolor.fusce@protonmail.org', '(03) 13343-8533', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:33.699813');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (7, 'Audra Johnson', 'faucibus.leo@google.edu', '(07) 18996-4274', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:34.123582');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (8, 'Fallon Bernard', 'suspendisse.commodo.tincidunt@google.com', '(04) 14486-6512', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:34.546573');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (9, 'Kenyon Mcfarland', 'aliquam@icloud.edu', '(08) 11277-2661', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:34.969611');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (10, 'Christian Rocha', 'aliquam.auctor@yahoo.net', '(04) 16533-8521', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:35.392383');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (11, 'Clark Patton', 'vel@google.com', '(05) 12995-4417', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:35.815452');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (12, 'Maxine West', 'facilisis.magna@protonmailacademicoifsuledu.edu', '(08) 17664-2153', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:36.240139');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (13, 'Camille Roman', 'nascetur.ridiculus.mus@icloud.net', '(01) 11413-3941', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:36.663127');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (14, 'Bo Blake', 'nisl.maecenas@academicoifsul.com', '(05) 17369-2162', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:37.085894');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (15, 'Maryam Franklin', 'quisque.nonummy@hotmail.org', '(05) 11048-3228', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:37.509409');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (16, 'Amir Walter', 'sollicitudin.commodo@academicoifsul.net', '(08) 16754-3328', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:37.944182');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (17, 'Jessamine Miles', 'elit.a.feugiat@outlook.edu', '(03) 16527-2672', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:38.366931');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (18, 'Jasper Ortiz', 'justo.sit.amet@yahoo.net', '(08) 16421-0227', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:38.790707');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (19, 'Kaye Park', 'fringilla.ornare.placerat@academicoifsul.edu', '(04) 17122-2764', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:39.213945');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (20, 'Macey Whitley', 'malesuada.fringilla@hotmail.edu', '(03) 17622-3436', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:39.637211');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (21, 'Martena Knox', 'cursus.et.magna@google.com', '(04) 16638-3643', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:40.06073');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (22, 'Damian Mitchell', 'lacus.quisque@hotmail.net', '(07) 14225-5224', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:40.483227');
INSERT INTO public.usuario (id, nome, email, tel, password, foto, criado_em) VALUES (23, 'Teste de Teste', 'teste@teste.com', '(00) 00000-0000', '$2y$10$/Y19c7YejnnKRhZ8nkDvAuZ8iya1.rAZzQ1nGCViw6p1.82TJ1Jcq', '', '2022-09-28 19:19:40.906105');


--
-- TOC entry 4307 (class 0 OID 0)
-- Dependencies: 211
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: skmpjtptrfsukp
--

SELECT pg_catalog.setval('public.usuario_id_seq', 23, true);


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

-- Completed on 2022-08-22 23:09:19

--
-- PostgreSQL database dump complete
--

