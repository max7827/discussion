<html>

<head>

    <meta charset="utf-8" />
    <title>gaurav</title>


    <script type="text/javascript">
        var _____WB$wombat$assign$function_____ = function(name) {
            return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name];
        };
        if (!self.__WB_pmw) {
            self.__WB_pmw = function(obj) {
                this.__WB_source = obj;
                return this;
            }
        } {
            let window = _____WB$wombat$assign$function_____("window");
            let self = _____WB$wombat$assign$function_____("self");
            let document = _____WB$wombat$assign$function_____("document");
            let location = _____WB$wombat$assign$function_____("location");
            let top = _____WB$wombat$assign$function_____("top");
            let parent = _____WB$wombat$assign$function_____("parent");
            let frames = _____WB$wombat$assign$function_____("frames");
            let opener = _____WB$wombat$assign$function_____("opener");

            if (!window['googleLT_']) {
                window['googleLT_'] = (new Date()).getTime();
            }
            if (!window['google']) {
                window['google'] = {};
            }
            if (!window['google']['loader']) {
                window['google']['loader'] = {};
                google.loader.ServiceBase = 'https://web.archive.org/web/20170906052436/https://www.google.com/uds';
                google.loader.GoogleApisBase = 'https://web.archive.org/web/20170906052436/https://ajax.googleapis.com/ajax';
                google.loader.ApiKey = 'notsupplied';
                google.loader.KeyVerified = true;
                google.loader.LoadFailure = false;
                google.loader.Secure = true;
                google.loader.GoogleLocale = 'www.google.com';
                google.loader.ClientLocation = null;
                google.loader.AdditionalParams = '';
                (function() {
                    var g = this,
                        l = function(a, b, c) {
                            a = a.split(".");
                            c = c || g;
                            a[0] in c || !c.execScript || c.execScript("var " + a[0]);
                            for (var d; a.length && (d = a.shift());) a.length || void 0 === b ? c = c[d] && c[d] !== Object.prototype[d] ? c[d] : c[d] = {} : c[d] = b
                        },
                        m = function(a, b, c) {
                            a[b] = c
                        };
                    var w = function(a, b) {
                            if (b) a = a.replace(n, "&amp;").replace(p, "&lt;").replace(q, "&gt;").replace(r, "&quot;").replace(t, "&#39;").replace(u, "&#0;");
                            else {
                                if (!v.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(n, "&amp;")); - 1 != a.indexOf("<") && (a = a.replace(p, "&lt;")); - 1 != a.indexOf(">") && (a = a.replace(q, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace(r, "&quot;")); - 1 != a.indexOf("'") && (a = a.replace(t, "&#39;")); - 1 != a.indexOf("\x00") && (a = a.replace(u, "&#0;"))
                            }
                            return a
                        },
                        n = /&/g,
                        p = /</g,
                        q = />/g,
                        r = /"/g,
                        t = /'/g,
                        u = /\x00/g,
                        v = /[\x00&<>"']/;
                    var x = /^[\w+/]+[=]{0,2}$/,
                        y = function(a) {
                            if ((a = (a || g).document.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && x.test(a)) return a
                        };

                    function z(a) {
                        return a in A ? A[a] : A[a] = -1 != navigator.userAgent.toLowerCase().indexOf(a)
                    }
                    var A = {};

                    function C(a, b) {
                        var c = function() {};
                        c.prototype = b.prototype;
                        a.da = b.prototype;
                        a.prototype = new c
                    }

                    function D(a, b, c) {
                        var d = Array.prototype.slice.call(arguments, 2) || [];
                        return function() {
                            return a.apply(b, d.concat(Array.prototype.slice.call(arguments)))
                        }
                    }

                    function E(a) {
                        a = Error(a);
                        a.toString = function() {
                            return this.message
                        };
                        return a
                    }

                    function F(a, b) {
                        a = a.split(/\./);
                        for (var c = window, d = 0; d < a.length - 1; d++) c[a[d]] || (c[a[d]] = {}), c = c[a[d]];
                        c[a[a.length - 1]] = b
                    }

                    function G(a, b, c) {
                        a[b] = c
                    }
                    window.Y || (window.Y = {});
                    l || (l = F);
                    m || (m = G);
                    google.loader.F = {};
                    l("google.loader.callbacks", google.loader.F);
                    var H = {},
                        I = {};
                    google.loader.eval = {};
                    l("google.loader.eval", google.loader.eval);
                    google.load = function(a, b, c) {
                        function d(a) {
                            var b = a.split(".");
                            if (2 < b.length) throw E("Module: '" + a + "' not found!");
                            "undefined" != typeof b[1] && (e = b[0], c.packages = c.packages || [], c.packages.push(b[1]))
                        }
                        var e = a;
                        c = c || {};
                        if (a instanceof Array || a && "object" == typeof a && "function" == typeof a.join && "function" == typeof a.reverse)
                            for (var f = 0; f < a.length; f++) d(a[f]);
                        else d(a);
                        if (a = H[":" + e]) {
                            c && !c.language && c.locale && (c.language = c.locale);
                            c && "string" == typeof c.callback && (f = c.callback, f.match(/^[[\]A-Za-z0-9._]+$/) && (f =
                                window.eval(f), c.callback = f));
                            if ((f = c && null != c.callback) && !a.D(b)) throw E("Module: '" + e + "' must be loaded before DOM onLoad!");
                            f ? a.u(b, c) ? window.setTimeout(c.callback, 0) : a.load(b, c) : a.u(b, c) || a.load(b, c)
                        } else throw E("Module: '" + e + "' not found!");
                    };
                    l("google.load", google.load);
                    google.ca = function(a, b) {
                        b ? (0 == J.length && (K(window, "load", L), !z("msie") && !z("safari") && !z("konqueror") && z("mozilla") || window.opera ? window.addEventListener("DOMContentLoaded", L, !1) : z("msie") ? document.write("<script defer onreadystatechange='google.loader.domReady()' src=//:>\x3c/script>") : (z("safari") || z("konqueror")) && window.setTimeout(M, 10)), J.push(a)) : K(window, "load", a)
                    };
                    l("google.setOnLoadCallback", google.ca);

                    function K(a, b, c) {
                        if (a.addEventListener) a.addEventListener(b, c, !1);
                        else if (a.attachEvent) a.attachEvent("on" + b, c);
                        else {
                            var d = a["on" + b];
                            a["on" + b] = null != d ? N([c, d]) : c
                        }
                    }

                    function N(a) {
                        return function() {
                            for (var b = 0; b < a.length; b++) a[b]()
                        }
                    }
                    var J = [];
                    google.loader.W = function() {
                        var a = window.event.srcElement;
                        "complete" == a.readyState && (a.onreadystatechange = null, a.parentNode.removeChild(a), L())
                    };
                    l("google.loader.domReady", google.loader.W);
                    var aa = {
                        loaded: !0,
                        complete: !0
                    };

                    function M() {
                        aa[document.readyState] ? L() : 0 < J.length && window.setTimeout(M, 10)
                    }

                    function L() {
                        for (var a = 0; a < J.length; a++) J[a]();
                        J.length = 0
                    }
                    google.loader.f = function(a, b, c) {
                        if (c) {
                            if ("script" == a) {
                                var d = document.createElement("script");
                                d.type = "text/javascript";
                                d.src = b
                            } else "css" == a && (d = document.createElement("link"), d.type = "text/css", d.href = b, d.rel = "stylesheet");
                            (a = document.getElementsByTagName("head")[0]) || (a = document.body.parentNode.appendChild(document.createElement("head")));
                            a.appendChild(d)
                        } else "script" == a ? (a = '<script src="' + w(b) + '" type="text/javascript"', (d = y()) && (a += ' nonce="' + w(d) + '"'), document.write(a + ">\x3c/script>")) : "css" == a &&
                            (a = '<link href="' + w(b) + '" type="text/css" rel="stylesheet"', (d = y()) && (a += ' nonce="' + w(d) + '"'), document.write(a + "></link>"))
                    };
                    l("google.loader.writeLoadTag", google.loader.f);
                    google.loader.$ = function(a) {
                        I = a
                    };
                    l("google.loader.rfm", google.loader.$);
                    google.loader.ba = function(a) {
                        for (var b in a) "string" == typeof b && b && ":" == b.charAt(0) && !H[b] && (H[b] = new O(b.substring(1), a[b]))
                    };
                    l("google.loader.rpl", google.loader.ba);
                    google.loader.aa = function(a) {
                        if ((a = a.specs) && a.length)
                            for (var b = 0; b < a.length; ++b) {
                                var c = a[b];
                                "string" == typeof c ? H[":" + c] = new P(c) : (c = new Q(c.name, c.baseSpec, c.customSpecs), H[":" + c.name] = c)
                            }
                    };
                    l("google.loader.rm", google.loader.aa);
                    google.loader.loaded = function(a) {
                        H[":" + a.module].o(a)
                    };
                    l("google.loader.loaded", google.loader.loaded);
                    google.loader.V = function() {
                        return "qid=" + ((new Date).getTime().toString(16) + Math.floor(1E7 * Math.random()).toString(16))
                    };
                    l("google.loader.createGuidArg_", google.loader.V);
                    F("google_exportSymbol", F);
                    F("google_exportProperty", G);
                    google.loader.a = {};
                    l("google.loader.themes", google.loader.a);
                    google.loader.a.K = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/bubblegum.css";
                    m(google.loader.a, "BUBBLEGUM", google.loader.a.K);
                    google.loader.a.M = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/greensky.css";
                    m(google.loader.a, "GREENSKY", google.loader.a.M);
                    google.loader.a.L = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/espresso.css";
                    m(google.loader.a, "ESPRESSO", google.loader.a.L);
                    google.loader.a.O = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/shiny.css";
                    m(google.loader.a, "SHINY", google.loader.a.O);
                    google.loader.a.N = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/minimalist.css";
                    m(google.loader.a, "MINIMALIST", google.loader.a.N);
                    google.loader.a.P = "//web.archive.org/web/20170906052436/https://www.google.com/cse/static/style/look/v2/default.css";
                    m(google.loader.a, "V2_DEFAULT", google.loader.a.P);

                    function P(a) {
                        this.b = a;
                        this.B = [];
                        this.A = {};
                        this.l = {};
                        this.g = {};
                        this.s = !0;
                        this.c = -1
                    }
                    P.prototype.i = function(a, b) {
                        var c = "";
                        void 0 != b && (void 0 != b.language && (c += "&hl=" + encodeURIComponent(b.language)), void 0 != b.nocss && (c += "&output=" + encodeURIComponent("nocss=" + b.nocss)), void 0 != b.nooldnames && (c += "&nooldnames=" + encodeURIComponent(b.nooldnames)), void 0 != b.packages && (c += "&packages=" + encodeURIComponent(b.packages)), null != b.callback && (c += "&async=2"), void 0 != b.style && (c += "&style=" + encodeURIComponent(b.style)), void 0 != b.noexp && (c += "&noexp=true"), void 0 != b.other_params && (c += "&" + b.other_params));
                        if (!this.s) {
                            google[this.b] && google[this.b].JSHash && (c += "&sig=" + encodeURIComponent(google[this.b].JSHash));
                            b = [];
                            for (var d in this.A) ":" == d.charAt(0) && b.push(d.substring(1));
                            for (d in this.l) ":" == d.charAt(0) && this.l[d] && b.push(d.substring(1));
                            c += "&have=" + encodeURIComponent(b.join(","))
                        }
                        return google.loader.ServiceBase + "/?file=" + this.b + "&v=" + a + google.loader.AdditionalParams + c
                    };
                    P.prototype.H = function(a) {
                        var b = null;
                        a && (b = a.packages);
                        var c = null;
                        if (b)
                            if ("string" == typeof b) c = [a.packages];
                            else if (b.length)
                            for (c = [], a = 0; a < b.length; a++) "string" == typeof b[a] && c.push(b[a].replace(/^\s*|\s*$/, "").toLowerCase());
                        c || (c = ["default"]);
                        b = [];
                        for (a = 0; a < c.length; a++) this.A[":" + c[a]] || b.push(c[a]);
                        return b
                    };
                    P.prototype.load = function(a, b) {
                        var c, d = this.H(b),
                            e = b && null != b.callback;
                        e && (c = new R(b.callback));
                        for (var f = [], h = d.length - 1; 0 <= h; h--) {
                            var k = d[h];
                            e && c.R(k);
                            this.l[":" + k] ? (d.splice(h, 1), e && this.g[":" + k].push(c)) : f.push(k)
                        }
                        if (d.length) {
                            b && b.packages && (b.packages = d.sort().join(","));
                            for (h = 0; h < f.length; h++) k = f[h], this.g[":" + k] = [], e && this.g[":" + k].push(c);
                            if (b || null == I[":" + this.b] || null == I[":" + this.b].versions[":" + a] || google.loader.AdditionalParams || !this.s) b && b.autoloaded || google.loader.f("script", this.i(a,
                                b), e);
                            else {
                                a = I[":" + this.b];
                                google[this.b] = google[this.b] || {};
                                for (var B in a.properties) B && ":" == B.charAt(0) && (google[this.b][B.substring(1)] = a.properties[B]);
                                google.loader.f("script", google.loader.ServiceBase + a.path + a.js, e);
                                a.css && google.loader.f("css", google.loader.ServiceBase + a.path + a.css, e)
                            }
                            this.s && (this.s = !1, this.c = (new Date).getTime(), 1 != this.c % 100 && (this.c = -1));
                            for (h = 0; h < f.length; h++) k = f[h], this.l[":" + k] = !0
                        }
                    };
                    P.prototype.o = function(a) {
                        -1 != this.c && (S("al_" + this.b, "jl." + ((new Date).getTime() - this.c), !0), this.c = -1);
                        this.B = this.B.concat(a.components);
                        google.loader[this.b] || (google.loader[this.b] = {});
                        google.loader[this.b].packages = this.B.slice(0);
                        for (var b = 0; b < a.components.length; b++) {
                            this.A[":" + a.components[b]] = !0;
                            this.l[":" + a.components[b]] = !1;
                            var c = this.g[":" + a.components[b]];
                            if (c) {
                                for (var d = 0; d < c.length; d++) c[d].U(a.components[b]);
                                delete this.g[":" + a.components[b]]
                            }
                        }
                    };
                    P.prototype.u = function(a, b) {
                        return 0 == this.H(b).length
                    };
                    P.prototype.D = function() {
                        return !0
                    };

                    function R(a) {
                        this.T = a;
                        this.v = {};
                        this.C = 0
                    }
                    R.prototype.R = function(a) {
                        this.C++;
                        this.v[":" + a] = !0
                    };
                    R.prototype.U = function(a) {
                        this.v[":" + a] && (this.v[":" + a] = !1, this.C--, 0 == this.C && window.setTimeout(this.T, 0))
                    };

                    function Q(a, b, c) {
                        this.name = a;
                        this.S = b;
                        this.w = c;
                        this.G = this.j = !1;
                        this.m = [];
                        google.loader.F[this.name] = D(this.o, this)
                    }
                    C(Q, P);
                    Q.prototype.load = function(a, b) {
                        var c = b && null != b.callback;
                        c ? (this.m.push(b.callback), b.callback = "google.loader.callbacks." + this.name) : this.j = !0;
                        b && b.autoloaded || google.loader.f("script", this.i(a, b), c)
                    };
                    Q.prototype.u = function(a, b) {
                        return b && null != b.callback ? this.G : this.j
                    };
                    Q.prototype.o = function() {
                        this.G = !0;
                        for (var a = 0; a < this.m.length; a++) window.setTimeout(this.m[a], 0);
                        this.m = []
                    };
                    var T = function(a, b) {
                        return a.string ? encodeURIComponent(a.string) + "=" + encodeURIComponent(b) : a.regex ? b.replace(/(^.*$)/, a.regex) : ""
                    };
                    Q.prototype.i = function(a, b) {
                        return this.X(this.I(a), a, b)
                    };
                    Q.prototype.X = function(a, b, c) {
                        var d = "";
                        a.key && (d += "&" + T(a.key, google.loader.ApiKey));
                        a.version && (d += "&" + T(a.version, b));
                        b = google.loader.Secure && a.ssl ? a.ssl : a.uri;
                        if (null != c)
                            for (var e in c) a.params[e] ? d += "&" + T(a.params[e], c[e]) : "other_params" == e ? d += "&" + c[e] : "base_domain" == e && (b = "http://" + c[e] + a.uri.substring(a.uri.indexOf("/", 7)));
                        google[this.name] = {}; - 1 == b.indexOf("?") && d && (d = "?" + d.substring(1));
                        return b + d
                    };
                    Q.prototype.D = function(a) {
                        return this.I(a).deferred
                    };
                    Q.prototype.I = function(a) {
                        if (this.w)
                            for (var b = 0; b < this.w.length; ++b) {
                                var c = this.w[b];
                                if ((new RegExp(c.pattern)).test(a)) return c
                            }
                        return this.S
                    };

                    function O(a, b) {
                        this.b = a;
                        this.h = b;
                        this.j = !1
                    }
                    C(O, P);
                    O.prototype.load = function(a, b) {
                        this.j = !0;
                        google.loader.f("script", this.i(a, b), !1)
                    };
                    O.prototype.u = function() {
                        return this.j
                    };
                    O.prototype.o = function() {};
                    O.prototype.i = function(a, b) {
                        if (!this.h.versions[":" + a]) {
                            if (this.h.aliases) {
                                var c = this.h.aliases[":" + a];
                                c && (a = c)
                            }
                            if (!this.h.versions[":" + a]) throw E("Module: '" + this.b + "' with version '" + a + "' not found!");
                        }
                        return google.loader.GoogleApisBase + "/libs/" + this.b + "/" + a + "/" + this.h.versions[":" + a][b && b.uncompressed ? "uncompressed" : "compressed"]
                    };
                    O.prototype.D = function() {
                        return !1
                    };
                    var U = !1,
                        V = [],
                        ba = (new Date).getTime(),
                        X = function() {
                            U || (K(window, "unload", W), U = !0)
                        },
                        Z = function(a, b) {
                            X();
                            if (!(google.loader.Secure || google.loader.Options && !1 !== google.loader.Options.csi)) {
                                for (var c = 0; c < a.length; c++) a[c] = encodeURIComponent(a[c].toLowerCase().replace(/[^a-z0-9_.]+/g, "_"));
                                for (c = 0; c < b.length; c++) b[c] = encodeURIComponent(b[c].toLowerCase().replace(/[^a-z0-9_.]+/g, "_"));
                                window.setTimeout(D(Y, null, "//web.archive.org/web/20170906052436/https://gg.google.com/csi?s=uds&v=2&action=" + a.join(",") + "&it=" + b.join(",")), 1E4)
                            }
                        },
                        S = function(a,
                            b, c) {
                            c ? Z([a], [b]) : (X(), V.push("r" + V.length + "=" + encodeURIComponent(a + (b ? "|" + b : ""))), window.setTimeout(W, 5 < V.length ? 0 : 15E3))
                        },
                        W = function() {
                            if (V.length) {
                                var a = google.loader.ServiceBase;
                                0 == a.indexOf("http:") && (a = a.replace(/^http:/, "https:"));
                                Y(a + "/stats?" + V.join("&") + "&nc=" + (new Date).getTime() + "_" + ((new Date).getTime() - ba));
                                V.length = 0
                            }
                        },
                        Y = function(a) {
                            var b = new Image,
                                c = Y.Z++;
                            Y.J[c] = b;
                            b.onload = b.onerror = function() {
                                delete Y.J[c]
                            };
                            b.src = a;
                            b = null
                        };
                    Y.J = {};
                    Y.Z = 0;
                    F("google.loader.recordCsiStat", Z);
                    F("google.loader.recordStat", S);
                    F("google.loader.createImageForLogging", Y);

                })();
                google.loader.rm({
                    "specs": ["visualization", "payments", {
                        "name": "annotations",
                        "baseSpec": {
                            "uri": "https://web.archive.org/web/20170906052436/http://www.google.com/reviews/scripts/annotations_bootstrap.js",
                            "ssl": null,
                            "key": {
                                "string": "key"
                            },
                            "version": {
                                "string": "v"
                            },
                            "deferred": true,
                            "params": {
                                "country": {
                                    "string": "gl"
                                },
                                "callback": {
                                    "string": "callback"
                                },
                                "language": {
                                    "string": "hl"
                                }
                            }
                        }
                    }, "language", "gdata", "wave", "spreadsheets", "search", "orkut", "feeds", "annotations_v2", "picker", "identitytoolkit", {
                        "name": "maps",
                        "baseSpec": {
                            "uri": "https://web.archive.org/web/20170906052436/http://maps.google.com/maps?file\u003dgoogleapi",
                            "ssl": "https://web.archive.org/web/20170906052436/https://maps-api-ssl.google.com/maps?file\u003dgoogleapi",
                            "key": {
                                "string": "key"
                            },
                            "version": {
                                "string": "v"
                            },
                            "deferred": true,
                            "params": {
                                "callback": {
                                    "regex": "callback\u003d$1\u0026async\u003d2"
                                },
                                "language": {
                                    "string": "hl"
                                }
                            }
                        },
                        "customSpecs": [{
                            "uri": "https://web.archive.org/web/20170906052436/http://maps.googleapis.com/maps/api/js",
                            "ssl": "https://web.archive.org/web/20170906052436/https://maps.googleapis.com/maps/api/js",
                            "version": {
                                "string": "v"
                            },
                            "deferred": true,
                            "params": {
                                "callback": {
                                    "string": "callback"
                                },
                                "language": {
                                    "string": "hl"
                                }
                            },
                            "pattern": "^(3|3..*)$"
                        }]
                    }, {
                        "name": "friendconnect",
                        "baseSpec": {
                            "uri": "https://web.archive.org/web/20170906052436/http://www.google.com/friendconnect/script/friendconnect.js",
                            "ssl": "https://web.archive.org/web/20170906052436/https://www.google.com/friendconnect/script/friendconnect.js",
                            "key": {
                                "string": "key"
                            },
                            "version": {
                                "string": "v"
                            },
                            "deferred": false,
                            "params": {}
                        }
                    }, {
                        "name": "sharing",
                        "baseSpec": {
                            "uri": "https://web.archive.org/web/20170906052436/http://www.google.com/s2/sharing/js",
                            "ssl": null,
                            "key": {
                                "string": "key"
                            },
                            "version": {
                                "string": "v"
                            },
                            "deferred": false,
                            "params": {
                                "language": {
                                    "string": "hl"
                                }
                            }
                        }
                    }, "ads", {
                        "name": "books",
                        "baseSpec": {
                            "uri": "https://web.archive.org/web/20170906052436/http://books.google.com/books/api.js",
                            "ssl": "https://web.archive.org/web/20170906052436/https://encrypted.google.com/books/api.js",
                            "key": {
                                "string": "key"
                            },
                            "version": {
                                "string": "v"
                            },
                            "deferred": true,
                            "params": {
                                "callback": {
                                    "string": "callback"
                                },
                                "language": {
                                    "string": "hl"
                                }
                            }
                        }
                    }, "elements", "earth", "ima"]
                });
                google.loader.rfm({
                    ":search": {
                        "versions": {
                            ":1": "1",
                            ":1.0": "1"
                        },
                        "path": "/api/search/1.0/01d3e4019d02927b30f1da06094837dc/",
                        "js": "default+en.I.js",
                        "css": "default+en.css",
                        "properties": {
                            ":Version": "1.0",
                            ":NoOldNames": false,
                            ":JSHash": "01d3e4019d02927b30f1da06094837dc"
                        }
                    },
                    ":language": {
                        "versions": {
                            ":1": "1",
                            ":1.0": "1"
                        },
                        "path": "/api/language/1.0/777c339fbf96071a10c88d71b8d19085/",
                        "js": "default+en.I.js",
                        "properties": {
                            ":Version": "1.0",
                            ":JSHash": "777c339fbf96071a10c88d71b8d19085"
                        }
                    },
                    ":annotations": {
                        "versions": {
                            ":1": "1",
                            ":1.0": "1"
                        },
                        "path": "/api/annotations/1.0/3b0f18d6e7bf8cf053640179ef6d98d1/",
                        "js": "default+en.I.js",
                        "properties": {
                            ":Version": "1.0",
                            ":JSHash": "3b0f18d6e7bf8cf053640179ef6d98d1"
                        }
                    },
                    ":wave": {
                        "versions": {
                            ":1": "1",
                            ":1.0": "1"
                        },
                        "path": "/api/wave/1.0/3b6f7573ff78da6602dda5e09c9025bf/",
                        "js": "default.I.js",
                        "properties": {
                            ":Version": "1.0",
                            ":JSHash": "3b6f7573ff78da6602dda5e09c9025bf"
                        }
                    },
                    ":picker": {
                        "versions": {
                            ":1": "1",
                            ":1.0": "1"
                        },
                        "path": "/api/picker/1.0/1c635e91b9d0c082c660a42091913907/",
                        "js": "default.I.js",
                        "css": "default.css",
                        "properties": {
                            ":Version": "1.0",
                            ":JSHash": "1c635e91b9d0c082c660a42091913907"
                        }
                    },
                    ":ima": {
                        "versions": {
                            ":3": "1",
                            ":3.0": "1"
                        },
                        "path": "/api/ima/3.0/28a914332232c9a8ac0ae8da68b1006e/",
                        "js": "default.I.js",
                        "properties": {
                            ":Version": "3.0",
                            ":JSHash": "28a914332232c9a8ac0ae8da68b1006e"
                        }
                    }
                });
                google.loader.rpl({
                    ":chrome-frame": {
                        "versions": {
                            ":1.0.0": {
                                "uncompressed": "CFInstall.js",
                                "compressed": "CFInstall.min.js"
                            },
                            ":1.0.1": {
                                "uncompressed": "CFInstall.js",
                                "compressed": "CFInstall.min.js"
                            },
                            ":1.0.2": {
                                "uncompressed": "CFInstall.js",
                                "compressed": "CFInstall.min.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.0.2",
                            ":1.0": "1.0.2"
                        }
                    },
                    ":swfobject": {
                        "versions": {
                            ":2.1": {
                                "uncompressed": "swfobject_src.js",
                                "compressed": "swfobject.js"
                            },
                            ":2.2": {
                                "uncompressed": "swfobject_src.js",
                                "compressed": "swfobject.js"
                            }
                        },
                        "aliases": {
                            ":2": "2.2"
                        }
                    },
                    ":ext-core": {
                        "versions": {
                            ":3.1.0": {
                                "uncompressed": "ext-core-debug.js",
                                "compressed": "ext-core.js"
                            },
                            ":3.0.0": {
                                "uncompressed": "ext-core-debug.js",
                                "compressed": "ext-core.js"
                            }
                        },
                        "aliases": {
                            ":3": "3.1.0",
                            ":3.0": "3.0.0",
                            ":3.1": "3.1.0"
                        }
                    },
                    ":scriptaculous": {
                        "versions": {
                            ":1.8.3": {
                                "uncompressed": "scriptaculous.js",
                                "compressed": "scriptaculous.js"
                            },
                            ":1.9.0": {
                                "uncompressed": "scriptaculous.js",
                                "compressed": "scriptaculous.js"
                            },
                            ":1.8.1": {
                                "uncompressed": "scriptaculous.js",
                                "compressed": "scriptaculous.js"
                            },
                            ":1.8.2": {
                                "uncompressed": "scriptaculous.js",
                                "compressed": "scriptaculous.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.9.0",
                            ":1.8": "1.8.3",
                            ":1.9": "1.9.0"
                        }
                    },
                    ":webfont": {
                        "versions": {
                            ":1.0.12": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.13": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.14": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.15": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.10": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.11": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.27": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.28": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.29": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.23": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.24": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.25": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.26": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.21": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.22": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.3": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.4": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.5": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.6": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.9": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.16": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.17": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.0": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.18": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.1": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.19": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            },
                            ":1.0.2": {
                                "uncompressed": "webfont_debug.js",
                                "compressed": "webfont.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.0.29",
                            ":1.0": "1.0.29"
                        }
                    },
                    ":jqueryui": {
                        "versions": {
                            ":1.8.17": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.16": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.15": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.14": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.4": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.13": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.5": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.12": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.6": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.11": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.7": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.10": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.8": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.9": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.6.0": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.7.0": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.5.2": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.0": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.7.1": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.5.3": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.1": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.7.2": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.8.2": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            },
                            ":1.7.3": {
                                "uncompressed": "jquery-ui.js",
                                "compressed": "jquery-ui.min.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.8.17",
                            ":1.8.3": "1.8.4",
                            ":1.5": "1.5.3",
                            ":1.6": "1.6.0",
                            ":1.7": "1.7.3",
                            ":1.8": "1.8.17"
                        }
                    },
                    ":mootools": {
                        "versions": {
                            ":1.3.0": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.2.1": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.1.2": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.4.0": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.3.1": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.2.2": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.4.1": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.3.2": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.2.3": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.4.2": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.2.4": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.2.5": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            },
                            ":1.1.1": {
                                "uncompressed": "mootools.js",
                                "compressed": "mootools-yui-compressed.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.1.2",
                            ":1.1": "1.1.2",
                            ":1.2": "1.2.5",
                            ":1.3": "1.3.2",
                            ":1.4": "1.4.2",
                            ":1.11": "1.1.1"
                        }
                    },
                    ":yui": {
                        "versions": {
                            ":2.8.0r4": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            },
                            ":2.9.0": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            },
                            ":2.8.1": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            },
                            ":2.6.0": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            },
                            ":2.7.0": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            },
                            ":3.3.0": {
                                "uncompressed": "build/yui/yui.js",
                                "compressed": "build/yui/yui-min.js"
                            },
                            ":2.8.2r1": {
                                "uncompressed": "build/yuiloader/yuiloader.js",
                                "compressed": "build/yuiloader/yuiloader-min.js"
                            }
                        },
                        "aliases": {
                            ":2": "2.9.0",
                            ":3": "3.3.0",
                            ":2.8.2": "2.8.2r1",
                            ":2.8.0": "2.8.0r4",
                            ":3.3": "3.3.0",
                            ":2.6": "2.6.0",
                            ":2.7": "2.7.0",
                            ":2.8": "2.8.2r1",
                            ":2.9": "2.9.0"
                        }
                    },
                    ":prototype": {
                        "versions": {
                            ":1.6.1.0": {
                                "uncompressed": "prototype.js",
                                "compressed": "prototype.js"
                            },
                            ":1.6.0.2": {
                                "uncompressed": "prototype.js",
                                "compressed": "prototype.js"
                            },
                            ":1.7.0.0": {
                                "uncompressed": "prototype.js",
                                "compressed": "prototype.js"
                            },
                            ":1.6.0.3": {
                                "uncompressed": "prototype.js",
                                "compressed": "prototype.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.7.0.0",
                            ":1.6.0": "1.6.0.3",
                            ":1.6.1": "1.6.1.0",
                            ":1.7.0": "1.7.0.0",
                            ":1.6": "1.6.1.0",
                            ":1.7": "1.7.0.0"
                        }
                    },
                    ":jquery": {
                        "versions": {
                            ":1.3.0": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.4.0": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.3.1": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.5.0": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.4.1": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.3.2": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.2.3": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.6.0": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.5.1": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.4.2": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.7.0": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.6.1": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.5.2": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.4.3": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.7.1": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.6.2": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.4.4": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.2.6": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.6.3": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            },
                            ":1.6.4": {
                                "uncompressed": "jquery.js",
                                "compressed": "jquery.min.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.7.1",
                            ":1.2": "1.2.6",
                            ":1.3": "1.3.2",
                            ":1.4": "1.4.4",
                            ":1.5": "1.5.2",
                            ":1.6": "1.6.4",
                            ":1.7": "1.7.1"
                        }
                    },
                    ":dojo": {
                        "versions": {
                            ":1.3.0": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.4.0": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.3.1": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.5.0": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.4.1": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.3.2": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.2.3": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.6.0": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.5.1": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.7.0": {
                                "uncompressed": "dojo/dojo.js.uncompressed.js",
                                "compressed": "dojo/dojo.js"
                            },
                            ":1.6.1": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.4.3": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.7.1": {
                                "uncompressed": "dojo/dojo.js.uncompressed.js",
                                "compressed": "dojo/dojo.js"
                            },
                            ":1.7.2": {
                                "uncompressed": "dojo/dojo.js.uncompressed.js",
                                "compressed": "dojo/dojo.js"
                            },
                            ":1.2.0": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            },
                            ":1.1.1": {
                                "uncompressed": "dojo/dojo.xd.js.uncompressed.js",
                                "compressed": "dojo/dojo.xd.js"
                            }
                        },
                        "aliases": {
                            ":1": "1.6.1",
                            ":1.1": "1.1.1",
                            ":1.2": "1.2.3",
                            ":1.3": "1.3.2",
                            ":1.4": "1.4.3",
                            ":1.5": "1.5.1",
                            ":1.6": "1.6.1",
                            ":1.7": "1.7.2"
                        }
                    }
                });
            }


        }


        function rescuefieldvalues(idarray) {
            for (var i = 0; i < idarray.length; i++) {
                var el = document.getElementById(idarray[i])
                if (!/(text)/.test(el.type)) //skip to next element if it isn't a input type="text" or textarea element
                    continue
                if (el.addBehavior && !window.sessionStorage) { //use IE behaviors to store info?
                    el.style.behavior = 'url(#default#userData)'
                    el.load("userentereddata")
                }
                var persisteddata = (window.sessionStorage) ? sessionStorage[idarray[i] + 'data'] : (el.addBehavior) ? el.getAttribute('dataattr') : null
                if (persisteddata) //if rescued data found for this element
                    el.value = persisteddata
                el.onkeyup = function() {
                    if (window.sessionStorage)
                        sessionStorage[this.id + 'data'] = this.value
                    else if (this.addBehavior) {
                        this.setAttribute("dataattr", this.value)
                        this.save("userentereddata")
                    }
                } //onkeyup
            } //for loop
        }
        jQuery(window).on('load', function() {
            new JCaption('img.caption');
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        // Load the Google Transliterate API
        google.load("elements", "1", {
            packages: "transliteration"
        });

        function onLoad() {
            var options = {
                sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
                shortcutKey: 'ctrl+g',
                transliterationEnabled: true
            };

            // Create an instance on TransliterationControl with the required
            // options.
            var control =
                new google.elements.transliteration.TransliterationControl(options);

            // Enable transliteration in the textbox with id
            // 'transliterateTextarea'.
            control.makeTransliteratable(['data']);
            control.c.qc.t13n.c[3].c.d.keyup[0].ia.F.p = 'https://www.google.com';
        }
        google.setOnLoadCallback(onLoad);
    </script>
    <script type="text/javascript">
        function printTextArea() {
            childWindow = window.open('', 'childWindow', 'location=yes, menubar=yes, toolbar=yes');
            childWindow.document.open();
            childWindow.document.write('<html><head></head><body>');
            childWindow.document.write(document.getElementById('data').value.replace(/\n/gi, '<br>'));
            childWindow.document.write('</body></html>');
            childWindow.print();
            childWindow.document.close();
            childWindow.close();
        }

        function go(converter) {
            window.location.href = converter;
        }
    </script>
</head>

<body class="no-skin" onLoad="dataLoaded()">
    <div id="container">
        <h1>kala billa</h1>
        <table border-collapse: collapse; width:100%;">
            <tbody>

                <tr style="height:10px;">
                    <td colspan="6"></td>
                </tr>

                <tr align="center">
                    <td style="padding-top: 5px; padding-left: 10px; " colspan="6"><strong style="font-size: 16px;">Insert Characters</strong>
                        <button id="purnviram" OnClick="myFunction1()" title="पूर्ण विराम" type="button">।</button>
                        <button id="deerghviram" OnClick="myFunction2()" title="दीर्घ विराम" type="button">॥</button>
                        <button id="laghav" OnClick="myFunction3()" title="लाघव चिन्ह" type="button">॰</button>
                        <button id="om" OnClick="myFunction5()" title="ॐ" type="button">ॐ</button>
                    </td>
                </tr>
                <tr>
                    <td font-weight: bold; " colspan=" 5" height="30px">type in english and press space it will automatically convert to hindi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="6">

                        <textarea id="data" style="width: 100%; max-width: 1000px; height: 200px; border: solid 2px black;" name="data" autofocus="" placeholder="Start Type Here................"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Total Words: <span id="wordCount">0</span></td>
                    <td colspan="2">Total Characters: <span id="totalChars">0</span></td>
                    <td colspan="2">Characters (Excluding Spaces): <span id="charCountNoSpace">0</span></td>
                </tr>
                <tr>


                    <td><button id="tds" onClick="saveTextAsFile();">&nbsp;Save Text to File</button></td>
                    <td><button onClick="saveDocAsFile();">&nbsp;Save as Doc File</button></td>
                    <td><button onclick="copytext();">Copy</button></td>

                    <td>
                        <button onclick=" document.getElementById( 'data' ).value=''">reset</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    -----------------------------------------------------------------------------------------------------


    <div class="jt-code hidden-desktop">




        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="/1.css" rel="stylesheet" type="text/css">


        <div class="container1 body-container grayed-background mobile-font">

            <div class="centered-mobile-container">
                <div class="panel">
                    <div class="section">

                        <div class="body">
                            <div id="TextareaWrapper">

                                <textarea id="input_tool" class="mobileLanguageTextarea copiable storable downloadable" dir="ltr" placeholder="Start Type Here......." style="margin: 0px 15px 0px -5px; width: 278px; height: 273px;"></textarea>
                                <input type="hidden" name="googleInputKeyCode" value="hi-t-i0-und">
                                <button id="tds" onClick="saveTextAsFile();">&nbsp;Save Text to File</button>
                                <button onclick="copytext()">Copy</button>
                                <button onclick=" document.getElementById( 'input_tool' ).value=''">reset</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/1.js"></script>
        <script async="" type="text/javascript" src="/2.js"></script>

    </div>

    ------------------------------------------------------------------------------------------------------------

    <script type=" text/javascript">
        let input3 = document.getElementById("data");
        enableTransliteration(input3, "hi");
        var control = new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(['data']);
        control.c.qc.t13n.c[3].c.d.keyup[0].ia.F.p = 'https://www.google.com';
    </script>
    <script type="text/javascript">
        rescuefieldvalues(['data']) //rescue data entered for form fields "address" and "feedback"




        function myFunction1() {
            etoh.data.value += '।';
            document.getElementById("data").focus();
        }


        function copytext() {
            var copyText = document.getElementById("input_tool");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");

        }



        function myFunction2() {
            etoh.data.value += '॥';
            document.getElementById("data").focus();
        }

        function myFunction3() {
            etoh.data.value += '॰';
            document.getElementById("data").focus();
        }

        function myFunction5() {
            etoh.data.value += ' ॐ ';
            document.getElementById("data").focus();
        }

        function saveTextAsFile() {
            var textToSave = document.getElementById("input_tool").value;

            textToSave += "\r\n";
            textToSave += "\r\n";
            var about_link = 'This Document Typed Online Using - ';
            about_link += "\r\n";
            about_link = about_link + 'https://www.yourwebsitename.com/';
            textToSave = textToSave + about_link;

            var textToSaveAsBlob = new Blob([textToSave], {
                type: "text/plain"
            });
            var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
            //var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
            var fileNameToSaveAs = "yourfilename.txt";

            var downloadLink = document.createElement("a");
            downloadLink.download = fileNameToSaveAs;
            downloadLink.innerHTML = "Download File";
            downloadLink.href = textToSaveAsURL;
            downloadLink.onclick = destroyClickedElement;
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);

            downloadLink.click();
        }

        // for save as doc file

        function saveDocAsFile() {
            var textToSave = document.getElementById("input_tool").value;
            textToSave += "\r\n";
            textToSave += "\r\n";
            var about_link = 'This Document Typed Online Using - ';
            about_link += "\r\n";
            about_link = about_link + 'https://www.yourwebsitename.com/';
            textToSave = textToSave + about_link;
            var textToSaveAsBlob = new Blob([textToSave], {
                type: "text/Doc"
            });
            var textToSaveAsURL = window.URL.createObjectURL(textToSaveAsBlob);
            //var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;
            var fileNameToSaveAs = "yourfilename.doc";

            var downloadLink = document.createElement("a");
            downloadLink.download = fileNameToSaveAs;
            downloadLink.innerHTML = "Download File";
            downloadLink.href = textToSaveAsURL;
            downloadLink.onclick = destroyClickedElement;
            downloadLink.style.display = "none";
            document.body.appendChild(downloadLink);

            downloadLink.click();
        }


        function destroyClickedElement(event) {
            document.body.removeChild(event.target);
        }

        // for copy text
        var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

        copyTextareaBtn.addEventListener('click', function(event) {
            var copyTextarea = document.querySelector('.js-copytextarea');
            copyTextarea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                console.log('Copying text command was ' + msg);
            } catch (err) {
                console.log('Oops, unable to copy');
            }
        });

        counter = function() {
            var value = document.getElementById('input_tool').value;
            if (value.length == 0) {
                document.getElementById('wordCount').innerHTML = 0;
                document.getElementById('totalChars').innerHTML = 0;
                document.getElementById('charCount').innerHTML = 0;
                document.getElementById('charCountNoSpace').innerHTML = 0;

                return;
            }

            var regex = /\s+/gi;
            var wordCount = value.trim().replace(regex, ' ').split(' ').length;
            var totalChars = value.length;
            var charCount = value.trim().length;
            var charCountNoSpace = value.replace(regex, '').length;
            document.getElementById('charCountNoSpace').innerHTML = charCountNoSpace;
            document.getElementById('wordCount').innerHTML = wordCount;
            document.getElementById('totalChars').innerHTML = totalChars;
            document.getElementById('charCount').innerHTML = charCount;

        };

        function dataLoaded() {
            //$(document).ready(function() {
            function init() {
                if (localStorage["data"]) {
                    document.getElementById('data').value = localStorage["data"];
                    // $('#data').val(localStorage["data"]);
                }
            }
            init();
            data.addEventListener('keypress', counter);

        }
        data.addEventListener('keyup', sendCode);

        function sendCode() {
            localStorage[document.getElementById('data').getAttribute('name')] = document.getElementById('data').value;
            //localStorage[$(this).attr('name')] = $(this).val();
            //);
        }
    </script>
</body>

</html>