<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Diana Aguillon | Asesora Inmobiliaria</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
:root{
  --primary:#0f172a;
  --accent:#c9a227;
  --accent-light:#e4c465;
  --text:#f8fafc;
  --muted:#94a3b8;
  --radius:20px;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

body{
  font-family:'Montserrat', sans-serif;
  background:linear-gradient(135deg,#0f172a,#1e293b);
  display:flex;
  justify-content:center;
  align-items:center;
  min-height:100vh;
  padding:20px;
}

.container{
  width:100%;
  max-width:500px;
}

.card{
  background:#111827;
  border-radius:var(--radius);
  padding:50px 30px;
  text-align:center;
  border:1px solid rgba(201,162,39,0.25);
  box-shadow:0 30px 70px rgba(0,0,0,0.6);
}

/* FOTO */
.photo{
  width:160px;
  height:160px;
  border-radius:50%;
  margin:0 auto 30px;
  border:3px solid var(--accent);
  background-image:url('TU_FOTO_AQUI.jpg');
  background-size:cover;
  background-position:center;
  box-shadow:0 0 40px rgba(201,162,39,0.3);
}

/* NOMBRE */
h1{
  font-size:1.6rem;
  font-weight:800;
  color:var(--accent-light);
  margin-bottom:6px;
}

.line{
  width:70px;
  height:3px;
  background:var(--accent);
  margin:12px auto 18px;
}

.role{
  font-size:1rem;
  color:var(--muted);
  margin-bottom:25px;
  font-weight:500;
}

/* FRASE COMERCIAL */
.tagline{
  font-size:.95rem;
  color:#d1d5db;
  margin-bottom:30px;
  line-height:1.5;
}

/* BOTONES */
.buttons{
  display:flex;
  flex-direction:column;
  gap:15px;
}

.btn{
  text-decoration:none;
  padding:14px;
  border-radius:14px;
  font-weight:600;
  transition:.3s ease;
  display:block;
}

/* CTA PRINCIPAL */
.btn-primary{
  background:linear-gradient(135deg,var(--accent),var(--accent-light));
  color:#000;
  box-shadow:0 15px 40px rgba(201,162,39,0.4);
}

.btn-primary:hover{
  transform:translateY(-3px);
  box-shadow:0 20px 50px rgba(201,162,39,0.6);
}

/* BOTONES SECUNDARIOS */
.btn-secondary{
  background:#1f2937;
  border:1px solid rgba(201,162,39,0.3);
  color:var(--text);
}

.btn-secondary:hover{
  background:linear-gradient(135deg,var(--accent),var(--accent-light));
  color:#000;
}

/* FOOTER */
.footer{
  margin-top:30px;
  font-size:.8rem;
  color:#6b7280;
}

/* RESPONSIVE */
@media(max-width:480px){
  .card{
    padding:40px 20px;
  }

  h1{
    font-size:1.4rem;
  }

  .photo{
    width:140px;
    height:140px;
  }
}
</style>
</head>

<body>

<div class="container">
  <div class="card">

    <div class="photo"></div>

    <h1>Diana Aguillon</h1>
    <div class="line"></div>
    <div class="role">Asesora Inmobiliaria Profesional</div>

    <div class="tagline">
      Te ayudo a vender, comprar o invertir en bienes raíces de forma segura, estratégica y rentable.
    </div>

    <div class="buttons">
      <a href="https://wa.me/521XXXXXXXXXX" target="_blank" class="btn btn-primary">
        📲 Contactar por WhatsApp
      </a>

      <a href="tel:+52XXXXXXXXXX" class="btn btn-secondary">
        📞 Llamar ahora
      </a>

      <a href="#" class="btn btn-secondary">
        🏡 Ver Propiedades Disponibles
      </a>

      <a href="#" class="btn btn-secondary">
        📅 Agendar Cita
      </a>
    </div>

    <div class="footer">
      Confianza · Transparencia · Resultados
    </div>

  </div>
</div>

</body>
</html>