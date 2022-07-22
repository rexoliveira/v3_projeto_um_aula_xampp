--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4
-- Dumped by pg_dump version 14.4

-- Started on 2022-07-21 23:38:33

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 210 (class 1259 OID 24578)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    nome character varying(20) NOT NULL,
    email character varying(150) NOT NULL,
    tel character varying(15) NOT NULL,
    password character varying(1000) NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 24577)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO postgres;

--
-- TOC entry 3314 (class 0 OID 0)
-- Dependencies: 209
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 3163 (class 2604 OID 24581)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 3308 (class 0 OID 24578)
-- Dependencies: 210
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (1, 'Rodrigo Oliveira', 'roolivei@yahoo.com', '(51) 99924-9414', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (2, 'Fernando Oliveira', 'fernando@yahoo.com', '(51) 99924-9415', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (3, 'Luciano Oliveira', 'luciano@yahoo.com', '(51) 99924-9416', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (9, 'Teste', 'teste@teste.com', '51999249414', '123456789');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (14, 'Teste2', 'teste2@teste2.com', '51999249417', '123456789');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (15, 'Teste3', 'teste3@teste3.com', '51999249418', '12345698521');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (16, 'Teste4', 'teste4@teste4.com', '51999249419', '12345698521');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (18, 'Teste55', 'teste4@teste55.com', '51999249420', '12345698521');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (19, 'kjllkl', 'lklklklklk@klklklkkl', '23232232', '2323232322');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (21, 'kjllkl', 'lklklklklk@klklklkklxax', '23232232', 'xaxaaxa');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (22, 'vvfvfvf', 'fvfvfvfvf@frrfrfrfrr', '(51) 99924-9414', '12345');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (23, 'vvfvfvfvf', 'vfvfvfvf@kklklkklklk.com', '(51) 99999-9999', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (24, 'cscscsc', 'scscscsc@efefeff', '(99) 99999-9999', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (25, 'xscacscsac', 'sacscasc@vfvfdvdf', '(99) 99999-9999', '');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (27, 'xscacscsac', 'sacscasc@vfvfdvdfswsws', '(99) 99999-9999', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (28, 'Rodrigo ale', 'nnnnmnnmn@NMNMN', '(99) 99999-9999', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (29, '1212112', '21232325656@3232', '(32) 32323-2323', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (30, 'fvfvfvf', 'fvfvfvfv@rfr', '(33) 33333-3333', '12323232');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (31, 'kbk9k98k98k8', 'kbkk89k89k@bbyyyy.com', '(65) 55555-5555', '5656555');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (32, '232322', '22232323@232232', '(22) 3232-2323', '655656565');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (33, 'xsxsxsxsx', 'sxsxsxs@dd', '(23) 23223-2323', 'xsxssx');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (34, 'cscscscs', 'scsacacac@vvvvsd', '(51) 32323-2323', '22656232');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (35, 'cscscscc', 'rodrigo@yahoo', '(51) 99999-9999', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (36, '23232322', 'sxxsxssx@dccdcdcd', '(23) 23223-2323', '1234');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (37, 'Ronex', 'roolivei20@yahoo.com.br', '(51) 99999-9999', '123456789');
INSERT INTO public.usuario (id, nome, email, tel, password) VALUES (4, 'Fabio', 'fabio@yahoo.com.br', '(51) 99999-1121', '323562X');


--
-- TOC entry 3315 (class 0 OID 0)
-- Dependencies: 209
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_seq', 37, true);


--
-- TOC entry 3165 (class 2606 OID 24587)
-- Name: usuario usuario_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_key UNIQUE (email);


--
-- TOC entry 3167 (class 2606 OID 24585)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


-- Completed on 2022-07-21 23:38:33

--
-- PostgreSQL database dump complete
--

