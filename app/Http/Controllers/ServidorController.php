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
                'descripcion' => 'Apache es el servidor web open-source más antiguo y ampliamente utilizado en internet, dominando aproximadamente el 30% del mercado de servidores web. Desarrollado por Apache Software Foundation desde 1995, ha sido el pilar de la web durante décadas. Es altamente modular, permitiendo a los administradores habilitar o deshabilitar módulos según sea necesario. Su flexibilidad lo hace ideal para todo tipo de proyectos, desde pequeños sitios estáticos hasta complejas aplicaciones web. Apache es especialmente popular en hosting compartido gracias a su excelente soporte para múltiples lenguajes de programación como PHP, Python y Perl. Su amplia comunidad y documentación lo hacen accesible incluso para principiantes.',
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
                'video' => 'https://www.youtube.com/embed/HFhpdSavfzw',
            ],
            'nginx' => [
                'nombre' => 'Nginx',
                'slug' => 'nginx',
                'descripcion' => 'Nginx es un servidor web moderno, ligero y de ultra-alto rendimiento que revolucionó la industria de los servidores web. Creado en 2002 por Igor Sysoev para resolver el problema C10K (manejar 10,000 conexiones simultáneas), se ha convertido en el servidor preferido por las grandes empresas tecnológicas. A diferencia de Apache, Nginx utiliza una arquitectura asincrónica basada en eventos, permitiéndole manejar miles de conexiones con un consumo mínimo de recursos. Su velocidad y eficiencia lo hacen indispensable para aplicaciones que requieren escalabilidad extrema. Nginx no solo funciona como servidor web, sino también como proxy inverso, balanceador de carga y caché. Es la opción favorita de startups y empresas de rápido crecimiento.',
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
                'imagen' => '/images/ngix.jpg',
                'video' => 'https://www.youtube.com/embed/0IbUNSYuXFM',
            ],
            'iis' => [
                'nombre' => 'Microsoft Internet Information Server (IIS)',
                'slug' => 'iis',
                'descripcion' => 'Internet Information Server (IIS) es el servidor web propietario de Microsoft, integrado nativamente en Windows Server. Es una solución empresarial de nivel corporativo diseñada específicamente para funcionar con tecnologías Microsoft como ASP.NET, C# y el Active Directory. IIS ofrece una interfaz gráfica intuitiva que facilita la administración, incluso para usuarios sin experiencia en línea de comandos. Su integración perfecta con el ecosistema Microsoft lo hace ideal para organizaciones que ya han invertido en infraestructura Microsoft. Proporciona características avanzadas como autenticación integrada de Windows, balanceo de carga integrado y excelentes herramientas de monitoreo. Aunque requiere licencias de Windows Server, es una opción sólida para empresas que buscan soporte empresarial y seguridad robusta.',
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
                'video' => 'https://www.youtube.com/embed/UHhvHpoyrnc',
            ],
            'litespeed' => [
                'nombre' => 'LiteSpeed Web Server',
                'slug' => 'litespeed',
                'descripcion' => 'LiteSpeed Web Server es un servidor web comercial de ultra-alto rendimiento que surge como alternativa superior a Apache. Diseñado específicamente para maximizar la velocidad y minimizar el consumo de recursos, LiteSpeed ofrece un rendimiento hasta 6 veces superior a Apache en muchos escenarios. Su arquitectura está optimizada para manejar contenido estático y dinámico de manera extremadamente eficiente. LiteSpeed es totalmente compatible con las configuraciones de Apache (.htaccess), lo que permite una migración sin fricción. Incluye características avanzadas como caché integrado, protección contra ataques DDoS y compresión automática de contenido. Está disponible en una versión Open Source gratuita y una versión Enterprise con características adicionales, haciendo que sea accesible para cualquier tamaño de negocio.',
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
                'video' => 'https://www.youtube.com/embed/VpzsJrfZ7kg',
            ],
            'nodejs' => [
                'nombre' => 'Node.js',
                'slug' => 'nodejs',
                'descripcion' => 'Node.js es un revolucionario entorno de ejecución que permite ejecutar JavaScript del lado del servidor, transformando JavaScript en un lenguaje de programación full-stack. Construido sobre el motor V8 de Google, Node.js se caracteriza por su modelo de entrada/salida no bloqueante y basado en eventos, permitiendo manejar miles de conexiones simultáneas de manera eficiente. Su famoso gestor de paquetes NPM contiene millones de módulos reutilizables que aceleran enormemente el desarrollo. Node.js es especialmente poderoso para aplicaciones en tiempo real como chats, notificaciones y colaboración en vivo. Su comunidad es una de las más grandes del planeta, con publicaciones diarias de nuevas librerías y herramientas. Es la opción preferida de startups tecnológicas y empresas que buscan desarrollo ágil y escalable.',
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
                'imagen' => '/images/node.jpg',
                'video' => 'https://www.youtube.com/embed/CvksD8V52yI',
            ],
            'tomcat' => [
                'nombre' => 'Apache Tomcat',
                'slug' => 'tomcat',
                'descripcion' => 'Apache Tomcat es un servidor de aplicaciones Java de código abierto que implementa las especificaciones de Servlet y Jakarta Servlet Specification. Desarrollado bajo el paraguas de Apache Software Foundation, Tomcat es el servidor Java más popular y ampliamente utilizado en el mundo empresarial. A diferencia de los servidores web tradicionales, Tomcat es un contenedor de aplicaciones que ejecuta código Java compilado, proporcionando características avanzadas como gestión de sesiones, pooling de conexiones y seguridad integrada. Es relativamente ligero comparado con otros servidores Java como JBoss o WebSphere, lo que lo hace accesible para pequeños y medianos proyectos. Tomcat es especialmente valorado en entornos empresariales donde se requiere estabilidad, confiabilidad y compatibilidad con el estándar Java EE.',
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
                'imagen' => '/images/tomcat.jpg',
                'video' => 'https://www.youtube.com/embed/o9rQH_1aEYM',
            ],
            'gunicorn' => [
                'nombre' => 'Gunicorn',
                'slug' => 'gunicorn',
                'descripcion' => 'Gunicorn (Green Unicorn) es un servidor de aplicaciones WSGI para Python que se ha convertido en el estándar de facto para servir aplicaciones Python en producción. Su nombre juguetón esconde una herramienta muy seria y robusta. Gunicorn está diseñado con una arquitectura de múltiples procesos workers, permitiendo que cada worker maneje solicitudes de manera independiente. Es extremadamente ligero y simple de usar, lo que lo hace perfecto para principiantes y profesionales por igual. Funciona perfectamente con frameworks populares como Django y Flask, proporcionando una puerta de enlace confiable entre el cliente y la aplicación Python. Su integración fluida con Nginx como proxy inverso lo convierte en la opción de elección para despliegues profesionales de Python. Gunicorn destaca por su velocidad de inicio, bajo consumo de recursos y excelente documentación.',
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
                'imagen' => '/images/gunicorn.jpg',
                'video' => 'https://www.youtube.com/embed/83mGqD2XDfI',
            ],
            'kestrel' => [
                'nombre' => 'Kestrel (.NET Core)',
                'slug' => 'kestrel',
                'descripcion' => 'Kestrel es el servidor web multiplataforma integrado nativamente en .NET Core (ahora .NET 5+), representando la nueva generación de servidores web modernos. Diseñado desde cero para alto rendimiento y escalabilidad, Kestrel demuestra el compromiso de Microsoft con la innovación en tecnologías web. Soporta tanto HTTP/1.1 como HTTP/2 de manera nativa, permitiendo aprovechar las ventajas del protocolo más moderno. Su arquitectura async/await y su integración profunda con el ecosistema .NET lo hacen excepcionalmente eficiente. Kestrel es completamente multiplataforma, funcionando sin cambios en Windows, Linux y macOS. Está especialmente optimizado para microservicios y APIs modernas, permitiendo despliegues rápidos y escalables. Es la opción ideal para desarrolladores que buscan la velocidad y el poder del lenguaje C# con tecnologías web contemporáneas.',
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
                'imagen' => '/images/kestrel.jpg',
                'video' => 'https://www.youtube.com/embed/fuTDzzarQGg',
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
