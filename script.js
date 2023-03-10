import http from 'k6/http';
import { sleep } from 'k6';

export const options = {
    vus: 2,
    duration: '20s',
};

/// POSTING TO CREATE 1000 Records (users) IN DB
export default function () {

    for (let id = 1; id <= 100; id++) {

        /// SAMPLE API WITHOUT Eloquent / pure php
        // http.get('http://127.0.0.1:8000/api/sample');
        // sleep(1);

        http.post('http://127.0.0.1:8000/api/users', '', {
            headers: {
                'Content-Type': 'application/json',
            },
        });

        /// POSTING TO CREATE 1000 Records (books) with FK IN DB
        http.post('http://127.0.0.1:8000/api/books', '', {
            headers: {
                'Content-Type': 'application/json',
            },
        });

    }

}


// Metrics
// http_req_duration => the end-to-end time of all requests (that is, the total latency)
// http_req_failed => the total number of failed requests
// iterations => the total number of iterations
