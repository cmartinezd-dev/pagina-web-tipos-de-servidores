<?php

namespace App\Http\Controllers;

class ServidorController extends Controller
{
    // Datos de los servidores investigados
    private function getServidores()
    {
        return [
            'apache' => [
                'nombre' => 'Apache HTTP Server',
                'slug' => 'apache',
                'descripcion' => 'Apache es el servidor web más antiguo y ampliamente utilizado en internet. Desarrollado por Apache Software Foundation, domina aproximadamente el 30% del mercado de servidores web.',
                'caracteristicas' => [
                    'Multiplataforma (Linux, Windows, macOS)',
                    'Código abierto y gratuito',
                    'Altamente modular y extensible',
                    'Soporte para múltiples lenguajes de programación',
                    'Excelente documentación y comunidad',
                    'Seguridad robusta',
                ],
                'memoria' => [
                    'Mínima: 10 MB',
                    'Recomendada: 64 MB para sitios pequeños',
                    'Producción: 256 MB - 1 GB o más',
                    'Por proceso: 2-10 MB',
                    'Consumo con módulos: Puede aumentar 30-50%',
                ],
                'ventajas' => [
                    'Comunidad muy grande',
                    'Amplio soporte para frameworks',
                    'Fácil configuración de virtual hosts',
                    'Excelente para hosting compartido',
                    'Flexible y personalizable',
                ],
                'desventajas' => [
                    'Puede ser lento con mucho tráfico',
                    'Consume más memoria que Nginx',
                    'Procesamiento secuencial de conexiones',
                    'Configuración compleja para sitios grandes',
                ],
                'casos_uso' => 'Ideal para sitios convencionales, blogs, pequeños y medianos proyectos. Perfecto cuando necesitas máxima compatibilidad.',
                'imagen' => '/images/apache.jpg',
                'video' => 'https://www.youtube.com/embed/nW-yJVl9YDc',
            ],
            'nginx' => [
                'nombre' => 'Nginx',
                'slug' => 'nginx',
                'descripcion' => 'Nginx es un servidor web moderno, ligero y de alto rendimiento. Creado en 2002 por Igor Sysoev, se ha convertido en el servidor más popular para sitios de alto tráfico.',
                'caracteristicas' => [
                    'Arquitectura asincrónica y basada en eventos',
                    'Extremadamente ligero',
                    'Excelente manejo de conexiones concurrentes',
                    'Bajo consumo de memoria',
                    'Muy rápido',
                    'Proxy inverso incorporado',
                ],
                'memoria' => [
                    'Mínima: 5 MB',
                    'Por proceso: 1-2 MB',
                    'Típica: 10-50 MB',
                    'Escalable a miles de conexiones concurrentes',
                    'Consumo muy predecible',
                ],
                'ventajas' => [
                    'Rendimiento superior',
                    'Bajo costo de recursos',
                    'Perfectamente escalable',
                    'Manejo de conexiones concurrentes',
                    'Ideal para aplicaciones modernas',
                    'Excelente proxy inverso y load balancer',
                ],
                'desventajas' => [
                    'Menos módulos que Apache',
                    'Comunidad menor (aunque en crecimiento)',
                    'Configuración menos intuitiva',
                    'Requiere reverse proxy para PHP dinámico',
                ],
                'casos_uso' => 'Perfecto para aplicaciones de alto tráfico, APIs, microservicios, startups tech, y cuando el rendimiento es crítico.',
                'imagen' => '/images/NGINX.png',
                'video' => 'https://www.youtube.com/embed/1CttrXCPPtE',
            ],
            'iis' => [
                'nombre' => 'Microsoft Internet Information Server (IIS)',
                'slug' => 'iis',
                'descripcion' => 'IIS es el servidor web de Microsoft, integrado en Windows Server. Es una solución empresarial con excelente integración en el ecosistema Microsoft.',
                'caracteristicas' => [
                    'Integración perfecta con ecosystem Microsoft',
                    'Soporte nativo para ASP.NET y C#',
                    'Autenticación Windows integrada',
                    'Interfaz gráfica de administración',
                    'Escalable y confiable',
                    'Excelente para aplicaciones .NET',
                ],
                'memoria' => [
                    'Mínima: 20 MB',
                    'Por aplicación: 10-50 MB',
                    'Típica en producción: 256 MB - 1 GB',
                    'Escalable a 2 GB o más',
                    'Gestión automática de memoria en .NET',
                ],
                'ventajas' => [
                    'Perfecto para entornos Microsoft',
                    'Excelente soporte empresarial',
                    'Interfaz gráfica fácil de usar',
                    'Integración con Active Directory',
                    'Seguridad de nivel empresarial',
                    'Ideal para aplicaciones .NET',
                ],
                'desventajas' => [
                    'Solo en Windows (muy caro)',
                    'Requiere licencias de Microsoft',
                    'Overhead de memoria',
                    'Comunidad Linux/Open Source pequeña',
                    'Curva de aprendizaje empinada',
                ],
                'casos_uso' => 'Empresas con infraestructura Microsoft, aplicaciones .NET, entornos corporativos con Active Directory.',
                'imagen' => '/images/microsof iis.jpg',
                'video' => 'https://www.youtube.com/embed/dDmYkGhWXk8',
            ],
            'litespeed' => [
                'nombre' => 'LiteSpeed Web Server',
                'slug' => 'litespeed',
                'descripcion' => 'LiteSpeed es un servidor web comercial de ultra-alto rendimiento, diseñado como alternativa a Apache con mejor desempeño.',
                'caracteristicas' => [
                    'Compatible con configuración de Apache',
                    '6 veces más rápido que Apache',
                    'Ultra bajo consumo de memoria',
                    'Protección contra ataques DDoS',
                    'Cache incorporado',
                    'Escalable',
                ],
                'memoria' => [
                    'Mínima: 3 MB',
                    'Por proceso: 0.5-1 MB',
                    'Típica: 20-30 MB',
                    'Muy eficiente incluso con tráfico alto',
                ],
                'ventajas' => [
                    'Rendimiento excepcional',
                    'Bajísimo consumo de memoria',
                    'Compatible con .htaccess de Apache',
                    'Protección DDoS nativa',
                    'Cache de página estática integrado',
                    'Versión Open Source disponible',
                ],
                'desventajas' => [
                    'Versión Enterprise es de pago',
                    'Comunidad más pequeña',
                    'Menos documentación que Apache',
                    'Costos de licencia para empresas',
                ],
                'casos_uso' => 'Hosting compartido, sitios de alto tráfico, WooCommerce, WordPress optimizado, cuando el costo de recursos es crítico.',
                'imagen' => '/images/litespeed.jpg',
                'video' => 'https://www.youtube.com/embed/Q-fYmKxzAqo',
            ],
            'nodejs' => [
                'nombre' => 'Node.js',
                'slug' => 'nodejs',
                'descripcion' => 'Node.js es un entorno de ejecución para JavaScript en el servidor. Revolucionó el desarrollo web permitiendo JavaScript full-stack.',
                'caracteristicas' => [
                    'Event-driven, non-blocking I/O',
                    'Single-threaded pero altamente escalable',
                    'NPM: mayor ecosistema de paquetes',
                    'JavaScript en frontend y backend',
                    'Perfecto para aplicaciones en tiempo real',
                    'Ideal para microservicios',
                ],
                'memoria' => [
                    'Mínima: 20 MB',
                    'Típica por aplicación: 50-150 MB',
                    'Escalable según carga',
                    'Buena gestión de memoria con v8',
                    'Posibles memory leaks si no se cuida',
                ],
                'ventajas' => [
                    'JavaScript en ambos lados',
                    'Excelente para APIs y microservicios',
                    'Comunicación en tiempo real (WebSockets)',
                    'Comunidad enorme y ecosistema NPM',
                    'Rápido desarrollo',
                    'Ideal para startups tech',
                ],
                'desventajas' => [
                    'Single-threaded por defecto',
                    'Callback hell en código no estructurado',
                    'Más convención que opinión',
                    'Requiere más conocimiento de JavaScript',
                    'Clustering manual necesario',
                ],
                'casos_uso' => 'APIs modernas, aplicaciones en tiempo real, startups, SPA backends, microservicios, chat en vivo, aplicaciones colaborativas.',
                'imagen' => 'https://via.placeholder.com/600x400?text=Node.js',
                'video' => 'https://www.youtube.com/embed/TlB_eWDSMt4',
            ],
            'tomcat' => [
                'nombre' => 'Apache Tomcat',
                'slug' => 'tomcat',
                'descripcion' => 'Tomcat es un servidor de aplicaciones Java que implementa las especificaciones de Servlet y JSP de Java.',
                'caracteristicas' => [
                    'Servidor de aplicaciones Java',
                    'Soporta Servlets y JSP',
                    'Ligero comparado con otros servidores Java',
                    'Fácil de configurar',
                    'Código abierto',
                    'Escalable',
                ],
                'memoria' => [
                    'Mínima: 50 MB',
                    'Típica: 256 MB - 512 MB',
                    'Producción: 1 GB - 2 GB',
                    'Garbage collector automático',
                    'Ajustable mediante parámetros JVM',
                ],
                'ventajas' => [
                    'Ligero entre servidores Java',
                    'Fácil configuración',
                    'Excelente documentación',
                    'Comunidad Java grande',
                    'Estable y confiable',
                    'Soporte empresarial disponible',
                ],
                'desventajas' => [
                    'Requiere más memoria que Nginx',
                    'Startup lento comparado con otros',
                    'Curva de aprendizaje alta',
                    'Requiere Java instalado',
                    'Overhead de JVM',
                ],
                'casos_uso' => 'Aplicaciones Java empresariales, sistemas legacy, cuando se requiere especificaciones Java estándar.',
                'imagen' => 'https://via.placeholder.com/600x400?text=Apache+Tomcat',
                'video' => 'https://www.youtube.com/embed/sRJsn4xKvvE',
            ],
            'gunicorn' => [
                'nombre' => 'Gunicorn',
                'slug' => 'gunicorn',
                'descripcion' => 'Gunicorn es un servidor de aplicaciones WSGI para Python. Ligero, robusto y ampliamente utilizado en producción.',
                'caracteristicas' => [
                    'Servidor WSGI para Python',
                    'Arquitectura multi-worker',
                    'Manejo automático de workers',
                    'Reload sin downtime',
                    'Muy ligero',
                    'Ideal para Flask y Django',
                ],
                'memoria' => [
                    'Mínima: 10-20 MB',
                    'Por worker: 30-100 MB',
                    'Típica: 50-200 MB para aplicación',
                    'Muy escalable',
                    'Bajo overhead',
                ],
                'ventajas' => [
                    'Muy simple y ligero',
                    'Excelente documentación',
                    'Fácil de usar con Nginx',
                    'Perfecto para Flask y Django',
                    'Rápido startup',
                    'Excelente para desarrollo ágil',
                ],
                'desventajas' => [
                    'Requiere Nginx como proxy',
                    'Comunidad más pequeña que Apache',
                    'Menos features que otros servidores',
                    'Requiere Python instalado',
                ],
                'casos_uso' => 'Aplicaciones Python, Flask, Django, startups, proyectos modernos, microservicios Python.',
                'imagen' => 'https://via.placeholder.com/600x400?text=Gunicorn',
                'video' => 'https://www.youtube.com/embed/s1FpDekm1Dw',
            ],
            'kestrel' => [
                'nombre' => 'Kestrel (.NET Core)',
                'slug' => 'kestrel',
                'descripcion' => 'Kestrel es el servidor web multiplataforma integrado en .NET Core, diseñado para alto rendimiento y escalabilidad.',
                'caracteristicas' => [
                    'HTTP/1.1 y HTTP/2 soportados',
                    'Multiplataforma (Linux, Windows, macOS)',
                    'Ultra rápido',
                    'Integrado en .NET Core',
                    'Ideal para microservicios',
                    'Escalable',
                ],
                'memoria' => [
                    'Mínima: 20-30 MB',
                    'Por aplicación: 50-150 MB',
                    'Muy eficiente',
                    'Gestión automática de .NET',
                ],
                'ventajas' => [
                    'Rendimiento excepcional',
                    'Multiplataforma',
                    'Integrado en .NET Core',
                    'Arquitectura moderna',
                    'Excelente para APIs',
                    'C# poderoso',
                ],
                'desventajas' => [
                    'Ecosistema más pequeño que Java',
                    'Historial menos probado en producción',
                    'Requiere .NET runtime',
                    'Comunidad en crecimiento',
                    'Menos stackoverflowers',
                ],
                'casos_uso' => 'APIs modernas, microservicios .NET, aplicaciones empresariales, cuando necesitas rendimiento y multiplataforma.',
                'imagen' => 'https://via.placeholder.com/600x400?text=Kestrel+.NET',
                'video' => 'https://www.youtube.com/embed/w-g5W9l73oU',
            ],
        ];
    }

    public function homepage()
    {
        $servidores = $this->getServidores();
        return view('servidor.homepage', ['servidores' => $servidores]);
    }

    public function show($slug)
    {
        $servidores = $this->getServidores();
        
        if (!isset($servidores[$slug])) {
            abort(404, 'Servidor no encontrado');
        }

        $servidor = $servidores[$slug];
        $otrosServidores = collect($servidores)
            ->filter(fn($s) => $s['slug'] !== $slug)
            ->take(3)
            ->values();

        return view('servidor.show', [
            'servidor' => $servidor,
            'otrosServidores' => $otrosServidores
        ]);
    }
}
