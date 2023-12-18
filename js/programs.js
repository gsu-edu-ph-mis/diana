
var vApp = new Vue({
    el: '#vApp',
    delimiters: ["${", "}"],
    mixins: [
    ],
    data: {
        pending: false,
        filters: [
            {
                key: 'grad',
                name: 'Graduate Programs',
                checked: false,
                group: 'level',
            },
            // {
            //     key: 'master',
            //     name: 'Master Programs',
            //     checked: false,
            //     group: 'level',
            // },
            // {
            //     key: 'doctorate',
            //     name: 'Doctorate Programs',
            //     checked: false,
            //     group: 'level',
            // },
            {
                key: 'undergrad',
                name: 'Undergraduate Programs',
                checked: false,
                group: 'level',
            },
            {
                key: 'baterna',
                name: 'Baterna',
                checked: false,
                group: 'campus',
                photo: '/images/campus-baterna-sm.png'
            },
            {
                key: 'mosqueda',
                name: 'Mosqueda',
                checked: false,
                group: 'campus',
                photo: '/images/campus-mosqueda-sm.png'
            },
            {
                key: 'salvador',
                name: 'Salvador',
                checked: false,
                group: 'campus',
                photo: '/images/campus-salvador-sm.png'
            },
            {
                key: 'board',
                name: 'Board Courses',
                checked: false,
                group: 'board',
            },
            {
                key: 'cags',
                name: 'College of Agricultural Sciences (CAGS)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CAGS-sm.png'
            },
            {
                key: 'cas',
                name: 'College of Arts and Sciences (CAS)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CAS-sm.png'
            },
            {
                key: 'cbm',
                name: 'College of Business Management (CBM)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CBM-sm.png'
            },
            {
                key: 'ccje',
                name: 'College of Criminal Justice Education (CCJE)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CCJE-sm.png'
            },
            {
                key: 'ceit',
                name: 'College of Engineering and Industrial Technology (CEIT)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CEIT-sm.png'
            },
            {
                key: 'cst',
                name: 'College of Science and Technology (CST)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CST-sm.png'
            },
            {
                key: 'cte',
                name: 'College of Teacher Education (CTE)',
                checked: false,
                group: 'college',
                photo: '/images/logos/CTE-sm.png'
            },
        ],
        programs: [
            {
                name: 'Bachelor of Science in Agriculture',
                logo: '/images/logos/CAGS-md.png',
                logoCampus: '/images/campus-baterna-sm.png',
                campus: 'Baterna Campus',
                tags: ['undergrad', 'cags', 'baterna', 'board'],
                college: 'College of Agricultural Sciences (CAgS)',
                board: '(Board Course)',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Fisheries',
                logo: '/images/logos/CAGS-md.png',
                logoCampus: '/images/campus-baterna-sm.png',
                campus: 'Baterna Campus',
                tags: ['undergrad', 'cags', 'baterna', 'board'],
                college: 'College of Agricultural Sciences (CAgS)',
                board: '(Board Course)',
                majors: ''
            },
            {
                name: 'Bachelor of Arts in English Language Studies',
                logo: '/images/logos/CAS-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cas', 'salvador'],
                college: 'College of Arts and Sciences (CAS)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Public Administration',
                logo: '/images/logos/CAS-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cas', 'salvador'],
                college: 'College of Arts and Sciences (CAS)',
                board: '',
                majors: ''
            },
            // 
            {
                name: 'Bachelor of Science in Business Administration',
                logo: '/images/logos/CBM-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cbm', 'salvador'],
                college: 'College of Business and Management (CBM)',
                board: '',
                majors: 'Financial Management, Marketing Management, Human Resource Management'
            },
            {
                name: 'Bachelor of Science in Entrepreneurship',
                logo: '/images/logos/CBM-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cbm', 'salvador'],
                college: 'College of Business and Management (CBM)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Hospitality Management',
                logo: '/images/logos/CBM-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cbm', 'salvador'],
                college: 'College of Business and Management (CBM)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Real Estate Management',
                logo: '/images/logos/CBM-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cbm', 'salvador'],
                college: 'College of Business and Management (CBM)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Tourism Management',
                logo: '/images/logos/CBM-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cbm', 'salvador'],
                college: 'College of Business and Management (CBM)',
                board: '',
                majors: ''
            },
            //
            {
                name: 'Bachelor of Science in Criminology',
                logo: '/images/logos/CCJE-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'ccje', 'salvador', 'board'],
                college: 'College of Criminal Justice Education (CCJE)',
                board: '(Board Course)',
                majors: ''
            },
            //
            {
                name: 'Bachelor of Industrial Technology',
                logo: '/images/logos/CEIT-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'ceit', 'salvador'],
                college: 'College of Engineering and Industrial Technology (CEIT)',
                board: '',
                majors: 'Automotive Technology, Electrical Technology, Electronics Technology, Mechanical Technology'
            },
            {
                name: 'Bachelor of Science in Electrical Engineering',
                logo: '/images/logos/CEIT-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'ceit', 'salvador', 'board'],
                college: 'College of Engineering and Industrial Technology (CEIT)',
                board: '(Board Course)',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Mechanical Engineering',
                logo: '/images/logos/CEIT-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'ceit', 'salvador', 'board'],
                college: 'College of Engineering and Industrial Technology (CEIT)',
                board: '(Board Course)',
                majors: ''
            },
            //
            {
                name: 'Bachelor of Science in Information Technology',
                logo: '/images/logos/CST-md.png',
                logoCampus: '/images/campus-mosqueda-sm.png',
                campus: 'Mosqueda Campus',
                tags: ['undergrad', 'cst', 'mosqueda'],
                college: 'College of Science and Technology (CST)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Computer Science',
                logo: '/images/logos/CST-md.png',
                logoCampus: '/images/campus-mosqueda-sm.png',
                campus: 'Mosqueda Campus',
                tags: ['undergrad', 'cst', 'mosqueda'],
                college: 'College of Science and Technology (CST)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Information System',
                logo: '/images/logos/CST-md.png',
                logoCampus: '/images/campus-mosqueda-sm.png',
                campus: 'Mosqueda Campus',
                tags: ['undergrad', 'cst', 'mosqueda'],
                college: 'College of Science and Technology (CST)',
                board: '',
                majors: ''
            },
            {
                name: 'Bachelor of Science in Food Technology',
                logo: '/images/logos/CST-md.png',
                logoCampus: '/images/campus-baterna-sm.png',
                campus: 'Mosqueda Campus',
                tags: ['undergrad', 'cst', 'baterna'],
                college: 'College of Science and Technology (CST)',
                board: '',
                majors: ''
            },
            // cte
            {
                name: 'Bachelor of Elementary Education',
                logo: '/images/logos/CTE-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cte', 'salvador', 'board'],
                college: 'College of Teacher Education (CTE)',
                board: '(Board Course)',
                majors: ''
            },
            {
                name: 'Bachelor of Secondary Education',
                logo: '/images/logos/CTE-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cte', 'salvador', 'board'],
                college: 'College of Teacher Education (CTE)',
                board: '(Board Course)',
                majors: 'English, Mathematics, Filipino, Science and Social Studies'
            },
            {
                name: 'Bachelor of Technology and Livelihood Education',
                logo: '/images/logos/CTE-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['undergrad', 'cte', 'salvador'],
                college: 'College of Teacher Education (CTE)',
                board: '',
                majors: 'Industrial Arts, Home Economics and Livelihood Education'
            },
            // {
            //     name: 'Diploma in Teaching',
            //     logo: '/images/logos/CTE-md.png',
            //     logoCampus: '/images/campus-salvador-sm.png',
            //     campus: 'Salvador Campus',
            //     tags: ['undergrad', 'cte', 'salvador'],
            //     college: 'College of Teacher Education (CTE)',
            //     board: '',
            //     majors: ''
            // },

            //
            {
                name: 'Master in Public Administration',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'master', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: ''
            },
            {
                name: 'Master in Education',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'master', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: 'Educational Management'
            },
            {
                name: 'Master of Arts in Teaching Mathematics',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'master', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: ''
            },
            {
                name: 'Master in Business Administration',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'master', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: ''
            },
            //
            {
                name: 'Doctor of Philosophy in Educational Management',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'doctorate', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: ''
            },
            {
                name: 'Doctor in Management',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'doctorate', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: 'Business Administration, Human Resource Management'
            },
            {
                name: 'Doctor of Education in Curriculum and Instruction',
                logo: '/images/logos/gradschool-md.png',
                logoCampus: '/images/campus-salvador-sm.png',
                campus: 'Salvador Campus',
                tags: ['grad', 'doctorate', 'salvador'],
                college: 'Graduate School',
                board: '',
                majors: ''
            },
            
        ]
    },
    validations: {},
    computed: {
        filterKeys: function () {
            var checkeds = this.filters.filter(o => o.checked);
            if(checkeds.length <= 0){
                return this.filters.map(o => o.key);
            }
            return checkeds.map(o => o.key);
        }
    },
    methods: {
        byGroup: function (arrays, group) {
            return arrays.filter(function (o) {
                return o.group === group;
            })
        },
        byTags: function (arrays, tags) {
            return arrays.filter(function (o) {
                for(var x = 0; x < tags.length; x++){
                    if(o.tags.includes(tags[x])){
                        return true
                    }
                }
                return false
            })
        },
        isChecked: function (key) {
            var me = this;

            var found = me.filters.find(function (f, i) {
                return f.key === key
            })
            if (found) {
                return found.checked
            }
            return false
        },
        checkbox: function (event) {
            var me = this;
            me.pending = true;
            setTimeout(function(){
                me.pending = false;
                me.update(event)
            }, 800)
            
        },
        update: function (event) {
            var me = this;
            var key = event.target.value;
            var checked = event.target.checked;

            var found = me.filters.find(function (f, i) {
                return f.key === key
            })

            if (found) {
                found.checked = checked
            }

        },
    }
});
